<?php

namespace App\Actions\NurseNotes;

use App\Http\Requests\Records\NurseNotes\StoreNurseNotesForm;
use App\Models\NurseNotes;
use App\Models\Patients;
use Carbon\Carbon;
use \Illuminate\Support\Collection;
use Illuminate\Http\Request;

class StoreNurseNotes
{
    public function handle(StoreNurseNotesForm $request, Patients $patient): Collection
    {
        $_results = collect();
        foreach (range(0, sizeof($request->obsDate) - 1) as $k) {
            if ($request->obsDate[$k] && $request->obsTime[$k]) {
                $_results->push(
                    NurseNotes::create([
                        'patient_id' => $patient->id,
                        'date_time' => Carbon::parse($request->obsDate[$k] . ' ' . $request->obsTime[$k]),
                        'ward_room' => $request->ward,
                        'focus' => $request->obsFocus[$k],
                        'action' => $request->obsDar[$k],
                    ])
                );
            }
        }
        return $_results;
    }
}
