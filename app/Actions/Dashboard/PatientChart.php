<?php

namespace  App\Actions\Dashboard;

use Illuminate\Support\Facades\DB;

class PatientChart
{
    public static function getDataForCharts()
    {
        $record = DB::table(function ($query) {
            // Select and union all records from 'admissions' table
            $query->select(DB::raw("'admissions' as table_name"), 'main_diagnosis')
                ->from('admissions')
                // Use unionAll to include all records, including duplicates
                ->unionAll(DB::table('emergencies')->select(DB::raw("'emergencies' as table_name"), 'main_diagnosis'))
                ->unionAll(DB::table('outpatients')->select(DB::raw("'outpatients' as table_name"), 'main_diagnosis'));
        }, 'combined')
            ->select('main_diagnosis')
            ->selectRaw('SUM(CASE WHEN table_name = "admissions" THEN 1 ELSE 0 END) 
                        + SUM(CASE WHEN table_name = "emergencies" THEN 1 ELSE 0 END)
                        + SUM(CASE WHEN table_name = "outpatients" THEN 1 ELSE 0 END) 
                    AS count')
            ->groupBy('main_diagnosis')
            ->pluck('count', 'main_diagnosis');

        $labels = [];
        $data = [];

        foreach ($record as $key => $value) {
            $labels[] = $key;
            $data[] = $value;
        }

        return [$labels, $data];
    }
}
