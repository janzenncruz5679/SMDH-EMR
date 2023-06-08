<?php

namespace App\Http\Controllers;

use App\Models\Patient_id;
use App\Models\AdmissionHistory;
use App\Models\BIlling;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index(Request $request)
    {
        $admission = Patient_id::create();
        $_admission = $admission->admission_table()->create([
            'full_name' => 'Janzenn Kyle' . ' ' . 'Gallema' . ' ' . 'Cruz' . ' ' . 'Jr.',
            'suffix' =>  'Jr.',
            'last_name' => 'Cruz',
            'first_name' => 'Janzenn Kyle',
            'middle_name' => 'Gallema',
            'ward_room_bed_service' => '12121',
            'type' => 'Admission',

            'personal_info' => [
                'sr_no' => '45145',
                'gender' => 'Male',
                'phone' => '09123456789',
                'age' => '22',
                'birthday' => '2001-05-05',
                'birthplace' => 'Malolos Bulacan',
                'nationality' => 'Filipino',
                'occupation' => 'Vendor',
                'religion' => 'Catholic',
                'civil_status' => 'Single',
                'perma_address' => 'Block 26 Lot 14 Malolos Bulacan',
            ],
            'full_address' => [
                'street' => 'Block 26 Lot 14',
                'municipality' => 'Malolos',
                'province' => 'Bulacan',
                'region' => '3',
                'barangay' => 'Tabang',
                'zip_code' => '3000',
                'country' => 'Philippines',
            ],
            'contact_person' => [
                'contact_last' => 'Cruz',
                'contact_first' => 'Janzenn Kyle',
                'contact_middle' => 'Gallema',
                'contact_suffix' => 'Sr.',
                'contact_address' => 'Block 26 Lot 14 Malolos Bulacan',
                'contact_phone' => '09123456789',
                'contact_rtp' => 'Parent',
            ],
            'patient_affiliate' => [
                'employer' => [
                    'name' => 'John Doe ',
                    'address' => 'Malolos Bulacan',
                    'contact' => '09062892006',
                ],
                'father' => [
                    'name' => 'John Doe ',
                    'address' => 'Malolos Bulacan',
                    'contact' => '09062892006',
                ],
                'mother' => [
                    'name' => 'John Doe ',
                    'address' => 'Malolos Bulacan',
                    'contact' => '09062892006',
                ],
                'spouse' => [
                    'name' => 'John Doe ',
                    'address' => 'Malolos Bulacan',
                    'contact' => '09062892006',
                ],
            ],
            'admitting_personel' => [
                'admitting_clerk' => 'Dr Doe',
                'admitting_physician' => 'Dr Doe',
                'referred_by' => 'Dr Doe',
            ],
            'hospital_visit' => [
                'admission_start' => [
                    'start_date' => '2023-05-17',
                    'start_time' => '03:06',
                ],
                'admission_end' => [
                    'end_date' => '2023-06-02',
                    'end_time' => '03:08',
                ],
                'admission_diff' => '16 days, 0 hours, 2 minutes',
            ],


            'type_of_admission' => 'New',
            'allergic' => 'Shrimp',
            'ssc' => 'a',
            'insurance' => [
                'hospitalization_plan' => 'Lorem',
                'health_insurance' => 'Lorem',
                'coverage_insurance' => 'Lorem',
            ],


            'main_diagnosis' => 'Sepsis',
            'diagnosis' => [
                'principal_diagnosis' => 'Sepsis',
                'other_diagnosis' => 'Sepsis',
            ],
            'other_opt' => [
                'principal_operation' => 'Sepsis',
                'other_operation' => 'Sepsis',
            ],
            'idc_code' => '12345',
            'icpm_code' => '12345',
        ]);

        $_admissionHistory = AdmissionHistory::create([
            'history_id' => $_admission->id,
            'full_name' => 'Janzenn Kyle' . ' ' . 'Gallema' . ' ' . 'Cruz' . ' ' . 'Jr.',
            'suffix' =>  'Jr.',
            'last_name' => 'Cruz',
            'first_name' => 'Janzenn Kyle',
            'middle_name' => 'Gallema',
            'ward_room_bed_service' => '12121',
            'type' => 'Admission',

            'personal_info' => [
                'sr_no' => '45145',
                'gender' => 'Male',
                'phone' => '09123456789',
                'age' => '22',
                'birthday' => '2001-05-05',
                'birthplace' => 'Malolos Bulacan',
                'nationality' => 'Filipino',
                'occupation' => 'Vendor',
                'religion' => 'Catholic',
                'civil_status' => 'Single',
                'perma_address' => 'Block 26 Lot 14 Malolos Bulacan',
            ],
            'full_address' => [
                'street' => 'Block 26 Lot 14',
                'municipality' => 'Malolos',
                'province' => 'Bulacan',
                'region' => '3',
                'barangay' => 'Tabang',
                'zip_code' => '3000',
                'country' => 'Philippines',
            ],
            'contact_person' => [
                'contact_last' => 'Cruz',
                'contact_first' => 'Janzenn Kyle',
                'contact_middle' => 'Gallema',
                'contact_suffix' => 'Sr.',
                'contact_address' => 'Block 26 Lot 14 Malolos Bulacan',
                'contact_phone' => '09123456789',
                'contact_rtp' => 'Parent',
            ],
            'patient_affiliate' => [
                'employer' => [
                    'name' => 'John Doe ',
                    'address' => 'Malolos Bulacan',
                    'contact' => '09062892006',
                ],
                'father' => [
                    'name' => 'John Doe ',
                    'address' => 'Malolos Bulacan',
                    'contact' => '09062892006',
                ],
                'mother' => [
                    'name' => 'John Doe ',
                    'address' => 'Malolos Bulacan',
                    'contact' => '09062892006',
                ],
                'spouse' => [
                    'name' => 'John Doe ',
                    'address' => 'Malolos Bulacan',
                    'contact' => '09062892006',
                ],
            ],
            'admitting_personel' => [
                'admitting_clerk' => 'Dr Doe',
                'admitting_physician' => 'Dr Doe',
                'referred_by' => 'Dr Doe',
            ],
            'hospital_visit' => [
                'admission_start' => [
                    'start_date' => '2023-05-17',
                    'start_time' => '03:06',
                ],
                'admission_end' => [
                    'end_date' => '2023-06-02',
                    'end_time' => '03:08',
                ],
                'admission_diff' => '16 days, 0 hours, 2 minutes',
            ],


            'type_of_admission' => 'New',
            'allergic' => 'Shrimp',
            'ssc' => 'a',
            'insurance' => [
                'hospitalization_plan' => 'Lorem',
                'health_insurance' => 'Lorem',
                'coverage_insurance' => 'Lorem',
            ],


            'main_diagnosis' => 'Sepsis',
            'diagnosis' => [
                'principal_diagnosis' => 'Sepsis',
                'other_diagnosis' => 'Sepsis',
            ],
            'other_opt' => [
                'principal_operation' => 'Sepsis',
                'other_operation' => 'Sepsis',
            ],
            'idc_code' => '12345',
            'icpm_code' => '12345',
        ]);

        $_admissionBill = Billing::create([
            'admissionBilling_id' => $_admission->id,
            'full_name' => $_admission->full_name,
        ]);

        dd($admission, $_admissionHistory, $_admissionBill);
    }
}
