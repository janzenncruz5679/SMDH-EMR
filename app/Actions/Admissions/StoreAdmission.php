<?php

namespace App\Actions\Admissions;

use App\Http\Requests\Patients\Admissions\StoreAdmissionForm;
use App\Models\Admissions;
use App\Models\Patients;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StoreAdmission
{
    public function handle(StoreAdmissionForm $request, Patients $patient)
    {
        $start_date_time = Carbon::parse(strtotime($request->start_date . ' ' . $request->start_time));
        $end_date_time = Carbon::parse(strtotime($request->end_date . ' ' . $request->end_time));

        return Admissions::create([
            'patient_id' => $patient->id,
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
                // 'furnished_by' => $request->furnished_by,
                // 'informant_address' => $request->informant_address,
                // 'relation_to_patient' => $request->relation_to_patient,
            ],
            'diagnosis' => [
                'admission_diagnosis' => $request->admission_diagnosis,
                'principal_diagnosis' => $request->principal_diagnosis,
                'other_diagnosis' => $request->other_diagnosis,
            ],
            'alergy' => $request->alert_allergic,
            // 'data_origin' => [
            //     'from' => $request->furnished_by,
            //     'address' => $request->informant_address,
            //     'relation' => $request->relation_to_patient,
            // ],
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
