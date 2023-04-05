<?php

namespace App\Actions\Emergency;

use App\Http\Requests\Records\Emergency\StoreEmergencyForm;
use App\Models\Billing;
use App\Models\Emergency;
use App\Models\EmergencyHistory;
use App\Models\Patient_id;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateEmergency
{

    public function handle(StoreEmergencyForm $request, Emergency $emergency)
    {
        $updatedEmergency = $this->UpdateEmergency($request, $emergency);
        $this->createEmergencyHistory($request, $updatedEmergency);
        $this->updateBilling($updatedEmergency);
        return $updatedEmergency;
    }

    private function UpdateEmergency(StoreEmergencyForm $request, Emergency $emergency)
    {
        // $emergency_id = Patient_id::findorfail($emergency->patient_id);
        $emergency->update([
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

        return $emergency;
    }

    private function createEmergencyHistory(Request $request, Emergency $emergency)
    {
        EmergencyHistory::create([
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
            'history_id' => $emergency->id,
        ]);
    }

    private function updateBilling(Emergency $emergency)
    {
        // try {
            $billing = Billing::where('emergencyBilling_id', $emergency->id)->first();
            $billing->update([
                'full_name' => $emergency->full_name,
            ]);
        // } catch (\Exception $err) {
        //     dd($err);
        //     return redirect()->back()->withErrors($err->getMessage());
        // }
    }
}