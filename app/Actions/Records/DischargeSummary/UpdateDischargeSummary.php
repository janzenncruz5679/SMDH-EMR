<?php

namespace App\Actions\Records\DischargeSummary;

use App\Models\DischargeSummary;
use App\Models\DischargeSummaryHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateDischargeSummary
{
    public function handle(Request $request, DischargeSummary $dischargeSummary)
    {
        $updatedDischargeSummary = $this->updateDischargeSummary($request, $dischargeSummary);
        $this->createDischargeSummaryHistory($request, $updatedDischargeSummary);

        return $updatedDischargeSummary;
    }

    private function updateDischargeSummary(Request $request, DischargeSummary $dischargeSummary)
    {
        $dischargeSummary->update([
            'discharge_date' => $request->discharge_date,
            'patients_identity' => $request->patients_identity,
            'positive_finding' => $request->positive_finding,
            'treatment' => $request->treatment,
            'course_in_hospital' => $request->course_in_hospital,
            'final_diagnosis' => $request->final_diagnosis,
            'plan' => $request->plan,
            'doctor_name' => $request->doctor_name,
            'license_number' => $request->license_number,
        ]);

        return $dischargeSummary;
    }

    private function createDischargeSummaryHistory(Request $request, DischargeSummary $dischargeSummary)
    {
        DischargeSummaryHistory::create([
            'history_id' => $dischargeSummary->id,
            'discharge_date' => $request->discharge_date,
            'patients_identity' => $request->patients_identity,
            'positive_finding' => $request->positive_finding,
            'treatment' => $request->treatment,
            'course_in_hospital' => $request->course_in_hospital,
            'final_diagnosis' => $request->final_diagnosis,
            'plan' => $request->plan,
            'doctor_name' => $request->doctor_name,
            'license_number' => $request->license_number,
        ]);
    }
}
