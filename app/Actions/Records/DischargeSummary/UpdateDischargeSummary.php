<?php

namespace App\Actions\Records\DischargeSummary;

use App\Models\DischargeSummary;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateDischargeSummary
{

    public function handle(Request $request, DischargeSummary $dischargeSummary)
    {
        $this->UpdateDischargeSummary($request, $dischargeSummary);

        return $dischargeSummary;
    }

    private function UpdateDischargeSummary(Request $request, DischargeSummary $dischargeSummary)
    {
        $dischargeSummary_id = DischargeSummary::findorfail($dischargeSummary->id);
        $dischargeSummary_id->update([
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
