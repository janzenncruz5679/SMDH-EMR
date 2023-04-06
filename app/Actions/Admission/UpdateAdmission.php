<?php

namespace App\Actions\Admission;

use App\Models\Admission;
use App\Models\AdmissionHistory;
use App\Models\Billing;
use App\Models\Patient_id;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateAdmission
{

    public function handle(Request $request, Admission $admission)
    {
        $updatedAdmission = $this->UpdateAdmission($request, $admission);
        $this->createAdmissionHistory($request, $updatedAdmission);
        $this->updateBilling($updatedAdmission);

        return $updatedAdmission;
    }

    private function UpdateAdmission(Request $request, Admission $admission)
    {
        // $admission_id = Patient_id::findorfail($admission->patient_id);
        $admission->update([
            'full_name' => $request->first_name . ' ' . $request->middle_name . ' ' . $request->last_name . ' ' . $request->suffix,
            'suffix' =>  $request->suffix,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'ward_room_bed_service' => $request->ward_room_bed_service,
            'type' => 'Admission',

            'personal_info' => [
                'sr_no' => $request->sr_no,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'age' => $request->age,
                'birthday' => $request->birthday,
                'birthplace' => $request->birthplace,
                'nationality' => $request->nationality,
                'occupation' => $request->occupation,
                'religion' => $request->religion,
                'civil_status' => $request->civil_status,
                'perma_address' => $request->perma_address,
            ],
            'full_address' => [
                'street' => $request->street,
                'municipality' => $request->municipality,
                'province' => $request->province,
                'region' => $request->region,
                'barangay' => $request->barangay,
                'zip_code' => $request->zip_code,
                'country' => $request->country,
            ],
            'contact_person' => [
                'contact_last' => $request->contact_last,
                'contact_first' => $request->contact_first,
                'contact_middle' => $request->contact_middle,
                'contact_suffix' => $request->contact_suffix,
                'contact_address' => $request->contact_address,
                'contact_phone' => $request->contact_phone,
                'contact_rtp' => $request->contact_rtp,
            ],
            'patient_affiliate' => [
                'employer' => [
                    'name' => $request->employer_name,
                    'address' => $request->employer_address,
                    'contact' => $request->employer_phone,
                ],
                'father' => [
                    'name' => $request->father_name,
                    'address' => $request->father_address,
                    'contact' => $request->father_phone,
                ],
                'mother' => [
                    'name' => $request->mother_maiden_name,
                    'address' => $request->mother_address,
                    'contact' => $request->mother_phone,
                ],
                'spouse' => [
                    'name' => $request->spouse_name,
                    'address' => $request->spouse_address,
                    'contact' => $request->spouse_phone,
                ],
            ],
            'admitting_personel' => [
                'admitting_clerk' => $request->admitting_clerk,
                'admitting_physician' => $request->admitting_physician,
                'referred_by' => $request->referred_by,
            ],
            'hospital_visit' => [
                'admission_start' => [
                    'start_date' => $request->start_date,
                    'start_time' => $request->start_time,
                ],
                'admission_end' => [
                    'end_date' => $request->end_date,
                    'end_time' => $request->end_time,
                ],
                'admission_diff' => $request->total_days,
            ],


            'type_of_admission' => $request->admission_type,
            'allergic' => $request->alert_allergic,
            'ssc' => $request->ssc,
            'insurance' => [
                'hospitalization_plan' => $request->hospitalization_plan,
                'health_insurance' => $request->health_insurance,
                'coverage_insurance' => $request->coverage_insurance,
            ],


            'main_diagnosis' => $request->main_diagnosis,
            'diagnosis' => [
                'principal_diagnosis' => $request->principal_diagnosis,
                'other_diagnosis' => $request->other_diagnosis,
            ],
            'other_opt' => [
                'principal_operation' => $request->principal_operation,
                'other_operation' => $request->other_operation,
            ],
            'idc_code' => $request->idc_code,
            'icpm_code' => $request->icpm_code,

        ]);

        return $admission;
    }

    private function createAdmissionHistory(Request $request, Admission $admission)
    {
        AdmissionHistory::create([
            'full_name' => $request->first_name . ' ' . $request->middle_name . ' ' . $request->last_name . ' ' . $request->suffix,
            'suffix' =>  $request->suffix,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'ward_room_bed_service' => $request->ward_room_bed_service,
            'type' => 'Admission',

            'personal_info' => [
                'sr_no' => $request->sr_no,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'age' => $request->age,
                'birthday' => $request->birthday,
                'birthplace' => $request->birthplace,
                'nationality' => $request->nationality,
                'occupation' => $request->occupation,
                'religion' => $request->religion,
                'civil_status' => $request->civil_status,
                'perma_address' => $request->perma_address,
            ],
            'full_address' => [
                'street' => $request->street,
                'municipality' => $request->municipality,
                'province' => $request->province,
                'region' => $request->region,
                'barangay' => $request->barangay,
                'zip_code' => $request->zip_code,
                'country' => $request->country,
            ],
            'contact_person' => [
                'contact_last' => $request->contact_last,
                'contact_first' => $request->contact_first,
                'contact_middle' => $request->contact_middle,
                'contact_suffix' => $request->contact_suffix,
                'contact_address' => $request->contact_address,
                'contact_phone' => $request->contact_phone,
                'contact_rtp' => $request->contact_rtp,
            ],
            'patient_affiliate' => [
                'employer' => [
                    'name' => $request->employer_name,
                    'address' => $request->employer_address,
                    'contact' => $request->employer_phone,
                ],
                'father' => [
                    'name' => $request->father_name,
                    'address' => $request->father_address,
                    'contact' => $request->father_phone,
                ],
                'mother' => [
                    'name' => $request->mother_maiden_name,
                    'address' => $request->mother_address,
                    'contact' => $request->mother_phone,
                ],
                'spouse' => [
                    'name' => $request->spouse_name,
                    'address' => $request->spouse_address,
                    'contact' => $request->spouse_phone,
                ],
            ],
            'admitting_personel' => [
                'admitting_clerk' => $request->admitting_clerk,
                'admitting_physician' => $request->admitting_physician,
                'referred_by' => $request->referred_by,
            ],
            'hospital_visit' => [
                'admission_start' => [
                    'start_date' => $request->start_date,
                    'start_time' => $request->start_time,
                ],
                'admission_end' => [
                    'end_date' => $request->end_date,
                    'end_time' => $request->end_time,
                ],
                'admission_diff' => $request->total_days,
            ],


            'type_of_admission' => $request->admission_type,
            'allergic' => $request->alert_allergic,
            'ssc' => $request->ssc,
            'insurance' => [
                'hospitalization_plan' => $request->hospitalization_plan,
                'health_insurance' => $request->health_insurance,
                'coverage_insurance' => $request->coverage_insurance,
            ],


            'main_diagnosis' => $request->main_diagnosis,
            'diagnosis' => [
                'principal_diagnosis' => $request->principal_diagnosis,
                'other_diagnosis' => $request->other_diagnosis,
            ],
            'other_opt' => [
                'principal_operation' => $request->principal_operation,
                'other_operation' => $request->other_operation,
            ],
            'idc_code' => $request->idc_code,
            'icpm_code' => $request->icpm_code,
            'history_id' => $admission->id,

        ]);
    }

    private function updateBilling(Admission $admission)
    {
        // try {
        $billing = Billing::where('admissionBilling_id', $admission->id)->first();
        $billing->update([
            'full_name' => $admission->full_name,
        ]);
        // } catch (\Exception $err) {
        //     dd($err);
        //     return redirect()->back()->withErrors($err->getMessage());
        // }
    }
}