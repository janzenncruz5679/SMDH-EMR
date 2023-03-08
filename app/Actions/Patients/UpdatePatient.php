<?php
namespace App\Actions\Patients;

use App\Models\Admissions;
use Illuminate\Http\Request;

class UpdatePatient
{
    public function handle(Request $request, Admissions $admission)
    {
        $admission->patient->fname = $request->first_name;
        $admission->patient->mname = $request->middle_name;
        $admission->patient->lname = $request->last_name;
        $admission->patient->suffix = $request->suffix;
        $admission->patient->bdate = $request->birthday;
        $admission->patient->birth_place = $request->birthplace;
        $admission->patient->contact_num = $request->phone;
        $admission->patient->senior_num = $request->sr_no;
        $admission->patient->nationality = $request->nationality;
        $admission->patient->religion = $request->religion;
        $admission->patient->civil_status = $request->civil_status;
        $admission->patient->sex = $request->gender;
        $admission->patient->occupation = $request->occupation;
        $admission->patient->perma_address = $request->perma_address;

        $newEmergencyContact = $admission->patient->emergency_contact;
        $newEmergencyContact['fname'] = $request->contact_first ?? null;
        $newEmergencyContact['mname'] = $request->contact_middle ?? null;
        $newEmergencyContact['lname'] = $request->contact_last ?? null;
        $newEmergencyContact['suffix'] = $request->contact_suffix ?? null;
        $newEmergencyContact['address'] = $request->contact_address ?? null;
        $newEmergencyContact['contact'] = $request->contact_phone ?? null;
        $newEmergencyContact['relationship'] = $request->contact_rtp ?? null;
        $admission->patient->emergency_contact = $newEmergencyContact;


        $newAddress = $admission->patient->address;
        $newAddress['street'] = $request->street ?? null;
        $newAddress['barangay'] = $request->barangay ?? null;
        $newAddress['municipality'] = $request->municipality ?? null;
        $newAddress['province'] = $request->province ?? null;
        $newAddress['region'] = $request->region ?? null;
        $newAddress['zip_code'] = $request->zip_code ?? null;
        $newAddress['country'] = $request->country ?? null;
        $admission->patient->address = $newAddress;


        $newRelatives = $admission->patient->relatives;
        $newRelatives['father']['fname'] = $request->father_first ?? null;
        $newRelatives['father']['mname'] = $request->father_middle ?? null;
        $newRelatives['father']['lname'] = $request->father_last ?? null;
        $newRelatives['father']['suffix'] = $request->father_suffix ?? null;
        $newRelatives['father']['occupation'] = $request->father_occupation ?? null;
        $newRelatives['father']['contact'] = $request->father_contact ?? null;
        $newRelatives['mother']['fname'] = $request->mother_first ?? null;
        $newRelatives['mother']['mname'] = $request->mother_middle ?? null;
        $newRelatives['mother']['lname'] = $request->mother_last ?? null;
        $newRelatives['mother']['suffix'] = $request->mother_suffix ?? null;
        $newRelatives['mother']['occupation'] = $request->mother_occupation ?? null;
        $newRelatives['mother']['contact'] = $request->mother_contact ?? null;
        $newRelatives['spouse']['fname'] = $request->spouse_first ?? null;
        $newRelatives['spouse']['mname'] = $request->spouse_middle ?? null;
        $newRelatives['spouse']['lname'] = $request->spouse_last ?? null;
        $newRelatives['spouse']['suffix'] = $request->spouse_suffix ?? null;
        $newRelatives['spouse']['occupation'] = $request->spouse_occupation ?? null;
        $newRelatives['spouse']['contact'] = $request->spouse_contact ?? null;
        $admission->patient->relatives = $newRelatives;

        return $admission->patient->save();
    }
}
