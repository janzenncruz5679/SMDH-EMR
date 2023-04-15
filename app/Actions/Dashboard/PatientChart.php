<?php

namespace  App\Actions\Dashboard;

use Illuminate\Support\Facades\DB;

class PatientChart
{
    public static function getDataForCharts()
    {
        $firstQuery = DB::table('admissions')
            ->select('main_diagnosis', DB::raw('count(*) as count'))
            ->groupBy('main_diagnosis');

        $secondQuery = DB::table('emergencies')
            ->select('main_diagnosis', DB::raw('count(*) as count'))
            ->groupBy('main_diagnosis');

        $thirdQuery = DB::table('outpatients')
            ->select('type', DB::raw('count(*) as count'))
            ->groupBy('type');

        $record = $firstQuery->union($secondQuery)->union($thirdQuery)
            ->pluck('count', 'main_diagnosis', 'type');

        $labels = [];
        $data = [];

        foreach ($record as $key => $value) {
            $labels[] = $key;
            $data[] = $value;
        }

        return [$labels, $data];
    }
}
