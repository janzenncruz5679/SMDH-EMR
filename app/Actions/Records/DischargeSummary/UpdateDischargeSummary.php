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
        // Update the discharge summary
        $updatedDischargeSummary = $this->updateDischargeSummary($request, $dischargeSummary);

        // Create a new record in DischargeSummaryHistory
        $this->createDischargeSummaryHistory($updatedDischargeSummary);

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

    private function createDischargeSummaryHistory(DischargeSummary $dischargeSummary)
    {
        DischargeSummaryHistory::create([
            'discharge_date' => $dischargeSummary->discharge_date,
            'patients_identity' => $dischargeSummary->patients_identity,
            'positive_finding' => $dischargeSummary->positive_finding,
            'treatment' => $dischargeSummary->treatment,
            'course_in_hospital' => $dischargeSummary->course_in_hospital,
            'final_diagnosis' => $dischargeSummary->final_diagnosis,
            'plan' => $dischargeSummary->plan,
            'doctor_name' => $dischargeSummary->doctor_name,
            'license_number' => $dischargeSummary->license_number,
            'history_id' => $dischargeSummary->id,
        ]);
    }
}