<?php

namespace App\Actions\Admissions;

use App\Actions\Patients\UpdatePatient;
use App\Models\Admissions;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateAdmission
{
    public function __construct(private UpdatePatient $updatePatient)
    {
    }

    public function handle(Request $request, Admissions $admission)
    {
        dump($request->toArray(), $admission->toArray());

        $this->updatePatient->handle($request, $admission);
        $this->updateAdmission($request, $admission);

        return $admission;
    }


    private function updateAdmission(Request $request, Admissions $admission)
    {
        $start_date_time = Carbon::parse(strtotime($request->start_date . ' ' . $request->start_time));
        $end_date_time = Carbon::parse(strtotime($request->end_date . ' ' . $request->end_time));

        return Admissions::create([
            'patient_id' => $admission->patient->id,
            'ward_room' => $request->ward_room_bed_service,
            'type' => $request->admission_type,
            'admission_start' => $start_date_time,
            'admission_end' => $end_date_time,
            'admission_start_end_diff' => $start_date_time->diffForHumans(
                $end_date_time,
                [
                    'parts' => 6,
                    'join' => ', ',
                    'short' => true
                ]
            ),
            'physician' => $request->admitting_physician,
            'admitting_clerk' => $request->admitting_clerk,
            'referred_by' => $request->referred_by,
            'ssc' => $request->ssc,
            'insurance' => [
                'hospitalization_plan' => $request->hospitalization_plan,
                'health_insurance' => $request->health_insurance,
                'coverage_insurance' => $request->coverage_insurance,
            ],
            'diagnosis' => [
                'admission_diagnosis' => $request->admission_diagnosis,
                'principal_diagnosis' => $request->principal_diagnosis,
                'other_diagnosis' => $request->other_diagnosis,
            ],
            'alergy' => $request->alert_allergic,
            'data_origin' => [
                'from' => $request->furnished_by,
                'address' => $request->informant_address,
                'relation' => $request->relation_to_patient,
            ],
            'additional_diagnosis' => [
                'principal_diagnosis' => $request->principal_diagnosis,
                'other_diagnosis' => $request->other_diagnosis
            ],
            'additional_operation_procedure' => [
                'principal_operation' => $request->principal_operation,
                'other_operation' => $request->other_operation
            ],
            'idc_code' => $request->idc_code,
            'icpm_code' => $request->icpm_code,
        ]);
    }
}
