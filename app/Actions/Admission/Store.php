<?php

// namespace App\Actions\Admission;

// use App\Models\Admissions;
// use App\Models\Patients;
// use Carbon\Carbon;
// use Illuminate\Http\Request;

// class Store
// {
//     // public function execute(Request $request)
//     // {
//     //     $start_date_time = Carbon::parse(strtotime($request->start_date . ' ' . $request->start_time));
//     //     $end_date_time = Carbon::parse(strtotime($request->end_date . ' ' . $request->end_time));

//     //     $patient = Patients::create([
//     //         'fname' => $request->first_name,
//     //         'mname' => $request->middle_name,
//     //         'lnamename' => $request->last_name,
//     //         'bdate' => $request->birthday,
//     //         'birth_place' => $request->birthplace,
//     //         'contact_num' => $request->phone,
//     //         'nationality' => $request->nationality,
//     //         'religion' => $request->religion,
//     //         'civil_status' => $request->civil_status,
//     //         'sex' => $request->gender,
//     //         'occupation' => $request->occupation,
//     //         'perma_address' => $request->perma_address,
//     //         'address' => $request->address,
//     //         'senior_num' => $request->sr_no,
//     //         'relatives' => [
//     //             'employer' => $request->employer_name
//     //                 ? [
//     //                     'name' => $request->employer_name,
//     //                     'address' => $request->employer_address,
//     //                     'contact' => $request->employer_phone,
//     //                 ]
//     //                 : null,
//     //             'father' => $request->father_name
//     //                 ? [
//     //                     'name' => $request->father_name,
//     //                     'address' => $request->father_address,
//     //                     'contact' => $request->father_phone,
//     //                 ]
//     //                 : null,
//     //             'mother' => $request->mother_maiden_name
//     //                 ? [
//     //                     'name' => $request->mother_maiden_name,
//     //                     'address' => $request->mother_address,
//     //                     'contact' => $request->mother_phone,
//     //                 ]
//     //                 : null,
//     //             'spouse' => $request->spouse_name
//     //                 ? [
//     //                     'name' => $request->spouse_name,
//     //                     'address' => $request->spouse_address,
//     //                     'contact' => $request->spouse_phone,
//     //                 ]
//     //                 : null,
//     //         ],
//     //     ]);

//     //     $patient->admission()->create([
//     //         'patient_id' => $patient->id,
//     //         'ward_room' => $request->ward_room_bed_service,
//     //         'type' => $request->admission_type,
//     //         'admission_start' => $start_date_time,
//     //         'admission_end' => $end_date_time,
//     //         'admission_start_end_diff' => $start_date_time->diffForHumans(
//     //             $end_date_time,
//     //             [
//     //                 'parts' => 6,
//     //                 'join' => ', ',
//     //                 'short' => true
//     //             ]
//     //         ),
//     //         'physician' => $request->admitting_physician,
//     //         'admitting_clerk' => $request->admitting_clerk,
//     //         'referred_by' => $request->referred_by,
//     //         'ssc' => $request->ssc,
//     //         'hospitalization_plan' => $request->hospitalization_plan,
//     //         'alergy' => $request->alert_allergic,
//     //         'insurance' => [
//     //             'name' => $request->health_insurance,
//     //             'type' => $request->coverage_insurance,
//     //         ],
//     //         'data_origin' => [
//     //             'from' => $request->furnished_by,
//     //             'address' => $request->informant_address,
//     //             'relation' => $request->relation_to_patient,
//     //         ],
//     //         'diagnosis' => $request->admission_diagnosis,
//     //         'additional_diagnosis' => [
//     //             'principal_diagnosis' => $request->principal_diagnosis,
//     //             'other_diagnosis' => $request->other_diagnosis
//     //         ],
//     //         'additional_operation_procedure' => [
//     //             'principal_operation' => $request->principal_operation,
//     //             'other_operation' => $request->other_operation
//     //         ],
//     //         'idc_code' => $request->idc_code,
//     //         'icpm_code' => $request->icpm_code,
//     //     ]);

//     //     // $admission = Admissions::create([
//     //     //     'new_patient_id' => $patient->id,
//     //     //     'ward_room',
//     //     //     'type',
//     //     //     'admission_start',
//     //     //     'admission_end',
//     //     //     'admission_start_end_diff',
//     //     //     'physician',
//     //     //     'addmitting_clerk',
//     //     //     'referred_by',
//     //     //     'alergy',
//     //     //     'insurance',
//     //     //     'data_origin',
//     //     //     'diagnosis',
//     //     //     'additional_diagnosis',
//     //     //     'additional_operation_procedure',
//     //     //     'idc_code',
//     //     //     'icpm_code',
//     //     // ]);

//     //     // $patient = $admission->patient->create([
//     //     //     'fname',
//     //     //     'mname',
//     //     //     'lnamename',
//     //     //     'bdate',
//     //     //     'birth_place',
//     //     //     'contact_num',
//     //     //     'nationality',
//     //     //     'religion',
//     //     //     'civil_status',
//     //     //     'sex',
//     //     //     'occupation',
//     //     //     'perma_address',
//     //     //     'address',
//     //     //     'senior_num',
//     //     //     'relatives',
//     //     // ]);
//     // }
// }