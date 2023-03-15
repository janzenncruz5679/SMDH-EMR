<?php

namespace App\Actions\Patients;

use App\Http\Requests\Patients\Admissions\StoreAdmissionForm;
use App\Models\Patients;

class StorePatients
{
    public function handle(StoreAdmissionForm $request)
    {
        return Patients::create([
            'fname' => $request->first_name,
            'mname' => $request->middle_name,
            'lname' => $request->last_name,
            'suffix' => $request->suffix,
            'bdate' => $request->birthday,
            'birth_place' => $request->birthplace,
            'contact_num' => $request->phone,
            'emergency_contact' => [
                'fname' => $request->contact_first,
                'mname' => $request->contact_middle,
                'lname' => $request->contact_last,
                'suffix' => $request->contact_suffix,
                'address' => $request->contact_address,
                'contact' => $request->contact_phone,
                'relationship' => $request->contact_rtp,
            ],
            'nationality' => $request->nationality,
            'religion' => $request->religion,
            'civil_status' => $request->civil_status,
            'sex' => $request->gender,
            'occupation' => $request->occupation,
            'perma_address' => $request->perma_address,
            'address' => [
                'street' => $request->street,
                'barangay' => $request->barangay,
                'municipality' => $request->municipality,
                'province' => $request->province,
                'region' => $request->region,
                'zip_code' => $request->zip_code,
                'country' => $request->country,
            ],
            'senior_num' => $request->sr_no,
            'relatives' => [
                'employer' => $request->employer_name
                    ? [
                        'name' => $request->employer_name,
                        'address' => $request->employer_address,
                        'contact' => $request->employer_phone,
                    ]
                    : null,
                'father' => $request->father_name
                    ? [
                        'name' => $request->father_name,
                        'address' => $request->father_address,
                        'contact' => $request->father_phone,
                    ]
                    : null,
                'mother' => $request->mother_maiden_name
                    ? [
                        'name' => $request->mother_maiden_name,
                        'address' => $request->mother_address,
                        'contact' => $request->mother_phone,
                    ]
                    : null,
                'spouse' => $request->spouse_name
                    ? [
                        'name' => $request->spouse_name,
                        'address' => $request->spouse_address,
                        'contact' => $request->spouse_phone,
                    ]
                    : null,
            ],
        ]);
    }
}
