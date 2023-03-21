<?php

namespace App\Actions\Emergency;

use App\Http\Requests\Records\Emergency\StoreEmergencyForm;
use App\Models\Emergency;
use App\Models\Patient_id;
use Carbon\Carbon;
use Illuminate\Http\Request;


class StoreEmergency
{
    public function handle(StoreEmergencyForm $request)
    {
        $emergency = Patient_id::create();
        $emergency->emergency_table()->create([
            'suffix' =>  $request->suffix,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'ward_room_bed_service' => $request->ward_room_bed_service,
            'sr_no' => $request->sr_no,
            'type' => $request->type,

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
            // 'case_summary' => [
            //     'latest_vitals' => $request->latest_vitals,
            //     'present_illness' => $request->present_illness,
            //     'diagnosis' => $request->diagnosis,
            //     'disposition' => $request->disposition,
            //     'discharge_opd' => $request->discharge_opd,
            // ]
        ]);
    }
}
