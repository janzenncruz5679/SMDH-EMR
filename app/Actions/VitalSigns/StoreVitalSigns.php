<?php

namespace App\Actions\VitalSigns;

use App\Models\Patients;
use App\Models\VitalSigns;
use Illuminate\Http\Request;

class StoreVitalSigns
{
    public function handle(Patients $patient, Request $request): VitalSigns
    {
        return VitalSigns::create([
            'patient_id' => $patient->id,
            'physician' => $request->physician,
            'notes' => $request->notes,
            'date' => $request->date,
            'weight' => $request->weight,
            'temperature' => $request->temperature,
            'blood_pressure' => $request->blood_pressure,
            'pulse' => $request->pulse,
            'respiration' => $request->respiration,
            'pain' => $request->pain,
            'initials' => $request->initials,
        ]);
    }
}
