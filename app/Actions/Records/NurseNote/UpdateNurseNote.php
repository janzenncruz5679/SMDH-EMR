<?php

namespace App\Actions\Records\NurseNote;

// use App\Http\Requests\Records\Outpatient\StoreOutpatientForm;

use App\Models\NurseNote;
use App\Models\NurseNoteHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateNurseNote
{

    public function handle(Request $request, NurseNote $nurseNote)
    {
        $updatednurseNote = $this->UpdateNurseNote($request, $nurseNote);
        $this->createNurseNoteHistory($request, $updatednurseNote);
        return $updatednurseNote;
    }

    private function UpdateNurseNote(Request $request, NurseNote $nurseNote)
    {
        $nurseNote->update([
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

        return $nurseNote;
    }

    private function createNurseNoteHistory(Request $request, NurseNote $nurseNote)
    {
        NurseNoteHistory::create([
            'history_id' => $nurseNote->id,
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
