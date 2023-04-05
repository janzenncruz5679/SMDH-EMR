<?php

namespace App\Actions\Outpatient;

use App\Http\Requests\Records\Outpatient\StoreOutpatientForm;
use App\Models\Billing;
use App\Models\Outpatient;
use App\Models\OutpatientHistory;
use App\Models\Patient_id;
use Carbon\Carbon;
use Illuminate\Http\Request;


class StoreOutpatient
{
    public function handle(StoreOutpatientForm $request)
    {
        $outpatient = Patient_id::create();
        $_outpatient = $outpatient->outpatient_table()->create([
            'full_name' => $request->first_name . ' ' . $request->middle_name . ' ' . $request->last_name . ' ' . $request->suffix,
            'suffix' =>  $request->suffix,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'ward_room_bed_service' => $request->ward_room_bed_service,
            'sr_no' => $request->sr_no,
            'type' => 'Outpatient',

            'personal_info' => [
                'gender' => $request->gender,
                'phone' => $request->phone,
                'age' => $request->age,
                'birthday' => $request->birthday,
                'birthplace' => $request->birthplace,
                'nationality' => $request->nationality,
                'occupation' => $request->occupation,
                'religion' => $request->religion,
                'civil_status' => $request->civil_status,
                'company' => $request->company,
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
            'hospital_visit' => [
                'visit_start' => [
                    'start_date' => $request->start_date,
                    'start_time' => $request->start_time,
                ],
                'visit_end' => [
                    'end_date' => $request->end_date,
                    'end_time' => $request->end_time,
                ],
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
            'case_summary' => [
                'latest_vitals' => [
                    'temperature' => $request->temperature,
                    'blood_pressure' => $request->blood_pressure,
                    'pulse_rate' => $request->pulse_rate,
                    'respiratory_rate' => $request->respiratory_rate,
                    'weight' => $request->weight,
                    'height' => $request->height,
                ],
                'present_illness' => $request->present_illness,
                'diagnosis' => $request->diagnosis,
                'chief_complaint' => $request->chief_complaint,
                'disposition' => $request->disposition,
            ],
        ]);

        $outpatientHistory = OutpatientHistory::create([
            'history_id' => $_outpatient->id,
            'full_name' => $request->first_name . ' ' . $request->middle_name . ' ' . $request->last_name . ' ' . $request->suffix,
            'suffix' =>  $request->suffix,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'ward_room_bed_service' => $request->ward_room_bed_service,
            'sr_no' => $request->sr_no,
            'type' => 'Emergency',

            'personal_info' => [
                'gender' => $request->gender,
                'phone' => $request->phone,
                'age' => $request->age,
                'birthday' => $request->birthday,
                'birthplace' => $request->birthplace,
                'nationality' => $request->nationality,
                'occupation' => $request->occupation,
                'religion' => $request->religion,
                'civil_status' => $request->civil_status,
                'company' => $request->company,
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
            'hospital_visit' => [
                'visit_start' => [
                    'start_date' => $request->start_date,
                    'start_time' => $request->start_time,
                ],
                'visit_end' => [
                    'end_date' => $request->end_date,
                    'end_time' => $request->end_time,
                ],
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
            'case_summary' => [
                'latest_vitals' => [
                    'temperature' => $request->temperature,
                    'blood_pressure' => $request->blood_pressure,
                    'pulse_rate' => $request->pulse_rate,
                    'respiratory_rate' => $request->respiratory_rate,
                    'weight' => $request->weight,
                    'height' => $request->height,
                ],
                'present_illness' => $request->present_illness,
                'diagnosis' => $request->diagnosis,
                'chief_complaint' => $request->chief_complaint,
                'disposition' => $request->disposition,
            ],
        ]);

        $_outpatientBill = Billing::create([
            'outpatientBilling_id' => $_outpatient->id,
            'full_name' => $_outpatient->full_name,
        ]);
    }
}
