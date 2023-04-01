<?php

namespace App\Actions\Records\VitalSign;

// use App\Http\Requests\Records\Outpatient\StoreOutpatientForm;

use App\Models\VitalSign;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateVital
{

    public function handle(Request $request, VitalSign $vitalSign)
    {
        $this->UpdateVital($request, $vitalSign);

        return $vitalSign;
    }

    private function UpdateVital(Request $request, VitalSign $vitalSign)
    {
        $vitalSign_id = VitalSign::findorfail($vitalSign->id);
        $vitalSign_id->update([
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
    }
}
