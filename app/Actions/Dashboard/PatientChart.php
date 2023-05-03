<?php

namespace  App\Actions\Dashboard;

use Illuminate\Support\Facades\DB;

class PatientChart
{
    public static function getDataForCharts()
    {
        $record = DB::table(function ($query) {
            $query->select(DB::raw("'admissions' as table_name"), 'main_diagnosis', 'updated_at')
                ->from('admissions')
                ->unionAll(DB::table('emergencies')->select(DB::raw("'emergencies' as table_name"), 'main_diagnosis', 'updated_at'))
                ->unionAll(DB::table('outpatients')->select(DB::raw("'outpatients' as table_name"), 'main_diagnosis', 'updated_at'));
        }, 'combined')
            ->select('main_diagnosis', 'updated_at')
            ->selectRaw('SUM(CASE WHEN table_name = "admissions" THEN 1 ELSE 0 END) 
                        + SUM(CASE WHEN table_name = "emergencies" THEN 1 ELSE 0 END)
                        + SUM(CASE WHEN table_name = "outpatients" THEN 1 ELSE 0 END) 
                    AS count')
            ->groupBy('main_diagnosis', 'updated_at')
            ->get(['main_diagnosis', 'updated_at', 'count']);

        $groupedRecord = $record->groupBy('main_diagnosis')->map(function ($items) {
            $count = $items->sum('count');
            $updated_at = $items->pluck('updated_at')->unique()->values()->all();
            return ['count' => $count, 'updated_at' => $updated_at];
        });

        // dd($groupedRecord->toArray());

        $labels = $groupedRecord->keys()->toArray();
        $data = $groupedRecord->map(function ($item) {
            return $item['count'];
        })->toArray();

        return [
            $labels, $data
        ];
    }
}