<?php

namespace App\Actions\NurseNotes;

use App\Models\NurseNotes;
use App\Models\Patients;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StoreNurseNotes
{
    public function handle(Request $request, Patients $patient): NurseNotes
    {
        // TODO: loop multiple nurse notes
        return NurseNotes::create([
            'patient_id' => $patient->id,
            'date_time' => Carbon::parse($request->obsDate[0] . ' ' . $request->obsTime[0]),
            'ward_room' => $request->ward,
            'focus' => $request->obsFocus[0],
            'action' => $request->obsDar[0],
        ]);
    }
}
