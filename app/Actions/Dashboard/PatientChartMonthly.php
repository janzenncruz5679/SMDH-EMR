<?php

namespace  App\Actions\Dashboard;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PatientChartMonthly
{
    public static function getDataForChartsMonthly()
    {
        $endDate = Carbon::today()->startOfDay(); // set the end date to the beginning of today
        $startDate = $endDate->copy()->subMonth(1)->startOfDay();

        $record = DB::table(function ($query) use ($startDate, $endDate) {
            $query->select(DB::raw("'admissions' as table_name"), 'main_diagnosis', 'updated_at')
                ->from('admissions')
                ->whereBetween('updated_at', [$startDate, $endDate]) // add whereBetween clause to filter records based on date range
                ->unionAll(DB::table('emergencies')->select(DB::raw("'emergencies' as table_name"), 'main_diagnosis', 'updated_at')->whereBetween('updated_at', [$startDate, $endDate]))
                ->unionAll(DB::table('outpatients')->select(DB::raw("'outpatients' as table_name"), 'main_diagnosis', 'updated_at')->whereBetween('updated_at', [$startDate, $endDate]));
        }, 'combined')
            ->select('main_diagnosis', 'updated_at')
            ->selectRaw('SUM(CASE WHEN table_name = "admissions" THEN 1 ELSE 0 END) 
                + SUM(CASE WHEN table_name = "emergencies" THEN 1 ELSE 0 END)
                + SUM(CASE WHEN table_name = "outpatients" THEN 1 ELSE 0 END) 
            AS count')
            ->groupBy('main_diagnosis', 'updated_at') // update the groupBy clause
            ->get(['main_diagnosis', 'updated_at', 'count']);

        // dd($record->toArray());

        $groupedRecord = $record->groupBy('main_diagnosis')->map(function ($items) {
            $count = $items->sum('count');
            $updated_at = $items->pluck('updated_at')->values()->all();
            return ['count' => $count, 'updated_at' => $updated_at];
        });

        // dd($groupedRecord->toArray());

        $labels_monthly = $groupedRecord->keys()->toArray();
        $data_monthly = $groupedRecord->map(function ($item) {
            return $item['count'];
        })->toArray();

        // dd($labels, $data);
        return [$labels_monthly, $data_monthly];
    }
}
