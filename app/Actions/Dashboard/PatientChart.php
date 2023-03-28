<?php

namespace  App\Actions\Dashboard;

use Illuminate\Support\Facades\DB;

class PatientChart
{
    public static function getDataForCharts()
    {
        $firstQuery = DB::table('admissions')
            ->select('type', DB::raw('count(*) as count'))
            ->groupBy('type');

        $secondQuery = DB::table('emergencies')
            ->select('type', DB::raw('count(*) as count'))
            ->groupBy('type');

        $thirdQuery = DB::table('outpatients')
            ->select('type', DB::raw('count(*) as count'))
            ->groupBy('type');

        $record = $firstQuery->union($secondQuery)->union($thirdQuery)
            ->pluck('count', 'type');

        $labels = [];
        $data = [];

        foreach ($record as $key => $value) {
            $labels[] = $key;
            $data[] = $value;
        }

        return [$labels, $data];
    }
}
