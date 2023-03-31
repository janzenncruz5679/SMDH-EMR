<?php

namespace App\Actions\Records\NurseNote;

// use App\Http\Requests\Records\Outpatient\StoreOutpatientForm;

use App\Models\NurseNote;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateNurseNote
{

    public function handle(Request $request, NurseNote $nurseNote)
    {
        $this->UpdateNurseNote($request, $nurseNote);

        return $nurseNote;
    }

    private function UpdateNurseNote(Request $request, NurseNote $nurseNote)
    {
        $nurseNote_id = NurseNote::findorfail($nurseNote->id);
        $nurseNote_id->update([
            'patient_fullname' => $request->patient_fullname,
            'age' => $request->age,
            'ward' => $request->ward,
            'record_date' => [
                'obsDate' => $request->obsDate,
            ],
            'record_time' => [
                'obsTime' => $request->obsTime,
            ],
            'focus' => [
                'obsFocus' => $request->obsFocus,
            ],
            'data_action_response' => [
                'obsDar' => $request->obsDar,
            ],
        ]);
    }
}