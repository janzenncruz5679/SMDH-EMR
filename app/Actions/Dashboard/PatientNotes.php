<?php

namespace  App\Actions\Dashboard;

use Illuminate\Support\Facades\DB;

class PatientNotes
{
    public static function getDataForNotes()
    {
        $lastVitalSignsId = DB::table('vital_signs')->latest('id')->value('id');
        $lastNurseNotesId = DB::table('nurse_notes')->latest('id')->value('id');
        $lastDischargeId = DB::table('discharge_summaries')->latest('id')->value('id');
        $lastFluidIntakeId = DB::table('fluid_intakes')->latest('id')->value('id');

        $result = [
            'Nurse Notes' => $lastNurseNotesId,
            'Vital Signs' => $lastVitalSignsId,
            'Discharge Summaries' => $lastDischargeId,
            'Fluid Intakes' => $lastFluidIntakeId,

        ];
        // dd($result);

        $labels_donut = [];
        $data_donut = [];

        foreach ($result as $key => $value) {
            $labels_donut[] = $key;
            $data_donut[] = $value;
        }

        return [$labels_donut, $data_donut];
    }
}
