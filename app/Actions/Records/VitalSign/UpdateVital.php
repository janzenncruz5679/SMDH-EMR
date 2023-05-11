<?php

namespace App\Actions\Records\VitalSign;

// use App\Http\Requests\Records\Outpatient\StoreOutpatientForm;

use App\Models\VitalSign;
use App\Models\VitalSignHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateVital
{

    public function handle(Request $request, VitalSign $vitalSign)
    {
        $updatedVital = $this->UpdateVital($request, $vitalSign);
        $this->createVitalHistory($request, $updatedVital);
        return $updatedVital;
    }

    private function UpdateVital(Request $request, VitalSign $vitalSign)
    {
        $vitalSign->update([
            'patient_fullname' => $request->patient_fullname,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'physician' => $request->physician,
            'notes' => $request->notes,
            'date' => [
                'dateRecord' => $request->dateRecord,
            ],
            'weight' => [
                'weightRecord' => $request->weightRecord,
            ],
            'temp' => [
                'tempRecord' => $request->tempRecord,
            ],
            'bp' => [
                'bpRecord' => $request->bpRecord,
            ],
            'pulse' => [
                'pulseRecord' => $request->pulseRecord,
            ],
            'respiration' => [
                'respirationRecord' => $request->respirationRecord,
            ],
            'pains' => [
                'painRecord' => $request->painRecord,
            ],
            'initials' => [
                'initialsRecord' => $request->initialsRecord,
            ],
        ]);

        return $vitalSign;
    }

    private function createVitalHistory(Request $request, VitalSign $vitalSign)
    {
        VitalSignHistory::create([
            'patient_fullname' => $request->patient_fullname,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'physician' => $request->physician,
            'notes' => $request->notes,
            'date' => [
                'dateRecord' => $request->dateRecord,
            ],
            'weight' => [
                'weightRecord' => $request->weightRecord,
            ],
            'temp' => [
                'tempRecord' => $request->tempRecord,
            ],
            'bp' => [
                'bpRecord' => $request->bpRecord,
            ],
            'pulse' => [
                'pulseRecord' => $request->pulseRecord,
            ],
            'respiration' => [
                'respirationRecord' => $request->respirationRecord,
            ],
            'pains' => [
                'painRecord' => $request->painRecord,
            ],
            'initials' => [
                'initialsRecord' => $request->initialsRecord,
            ],
            'history_id' => $vitalSign->id,
        ]);
    }
}
