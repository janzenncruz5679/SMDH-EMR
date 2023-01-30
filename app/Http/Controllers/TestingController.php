<?php

namespace App\Http\Controllers;

use App\Models\First_admission;
use App\Models\Patient_id;
use App\Models\Second_admission;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index()
    {
        $patients_Dummy_id = Patient_id::create();
        $id = $patients_Dummy_id->id;
        $patients_Dummy =  $patients_Dummy_id->admission_table()->create([
            'address' => 'Mahogany lane, Ylang Ylang Homes Phase 2 Tabang Guiguinto Bulacan',
            'sr_no' => '254789',
            'last_name' => 'Dela Cruz',
            'first_name' => 'Ermengarde Marie Elise',
            'middle_name' => 'Fernandez',
            'type' => 'Admission',
            'gender' => 'Female',
            'ward_room_bed_service' => 'HPY2023',
            'age' => '23',
            'gender' => 'Female',
            'phone' => '09059353017',
            'birthday' => '2000-01-06',
        ]);

        $patients_Dummy_two = $patients_Dummy->admission_two()->create([
            'record_id' => $patients_Dummy->record_no,
            'civil_status' => 'Married',
            'perma_address' => 'Brgy Salangan San Miguel Bulacan',
            'birthplace' => 'Vladivostok',
            'nationality' => 'Filipino',
            'religion' => 'Catholic',
            'occupation' => 'Software Developer',
        ]);

        $patients_Dummy_three = $patients_Dummy->admission_three()->create([
            'record_id' => $patients_Dummy->record_no,
            'employer_name' => 'Marie Doe',
            'employer_address' => 'Brgy Atlag, Malolos Bulacan',
            'employer_phone' => '09062632154',
            'father_name' => 'John Walsh Delano',
            'father_address' => 'Brgy Atlag, Malolos Bulacan',
            'father_phone' => '09752632154',
            'mother_maiden_name' => 'Mary Walsh Delana',
            'mother_address' => 'E3 Maginhawa St Sikatuna Village, Quezon City',
            'mother_phone' => '09062632154',
            'spouse_name' => 'Anna Marie Walsh Delana',
            'spouse_address' => 'E3 Maginhawa St Sikatuna Village, Quezon City',
            'spouse_phone' => '09062777154',
        ]);

        $patients_Dummy_four = $patients_Dummy->admission_four()->create([
            'record_id' => $patients_Dummy->record_no,
            'start_date' => '2023-01-14',
            'start_time' => '06:58',
            'end_date' => '2023-01-16',
            'end_time' => '06:57',
            'total_days' => '1 days, 23 hours, 59 minutes',
            'admitting_physician' => 'Dr. Sven Doe',
            'admitting_clerk' => 'Nurse Crystal Maiden Doe',
            'admission_type' => 'Onsite',
            'referred_by' => 'Nurse Crystal Maiden Doe',
        ]);

        $patients_Dummy_five = $patients_Dummy->admission_five()->create([
            'record_id' => $patients_Dummy->record_no,
            'ssc' => 'd',
            'alert_allergic' => 'shrimp',
            'hospitalization_plan' => 'SIDC',
            'health_insurance' => 'PhilHealth',
            'coverage_insurance' => 'Full Coverage',
            'furnished_by' => 'Mary Winowa Doe',
            'informant_address' => 'Malolos Bulacan',
            'relation_to_patient' => 'Sister',
        ]);

        $patients_Dummy_six = $patients_Dummy->admission_six()->create([
            'record_id' => $patients_Dummy->record_no,
            'admission_diagnosis' => 'Admit it as Possible',
            'principal_diagnosis' => 'Surgery at left foot',
            'other_diagnosis' => 'none',
            'idc_code' => '15874',
            'principal_operation' => 'Major Surgery',
            'other_operation' => 'none',
            'icpm_code' => '845874356415694',
        ]);

        dd($id, $patients_Dummy, $patients_Dummy_two, $patients_Dummy_three, $patients_Dummy_four, $patients_Dummy_five, $patients_Dummy_six);
    }

    public function index_second()
    {
        $patients_Dummy_id = Patient_id::create();
        $id = $patients_Dummy_id->id;
        $patients_Dummy =  $patients_Dummy_id->emergency_table()->create([
            'address' => 'Mahogany lane, Ylang Ylang Homes Phase 2 Tabang Guiguinto Bulacan',
            'sr_no' => '254789',
            'last_name' => 'Dela Cruz',
            'first_name' => 'Winston Alexander Napoleon',
            'middle_name' => 'Fernandez',
            'type' => 'Emergency',
            'gender' => 'Male',
            'ward_room_bed_service' => 'HPY2023',
            'age' => '23',
            'gender' => 'Female',
            'phone' => '09059353017',
            'birthday' => '2000-01-06',
        ]);

        $patients_Dummy_two = $patients_Dummy->emergency_two()->create([
            'record_id' => $patients_Dummy->record_no,
            'civil_status' => 'Married',
            'perma_address' => 'Brgy Salangan San Miguel Bulacan',
            'birthplace' => 'Vladivostok',
            'nationality' => 'Filipino',
            'religion' => 'Catholic',
            'occupation' => 'Software Developer',
        ]);

        $patients_Dummy_three = $patients_Dummy->emergency_three()->create([
            'record_id' => $patients_Dummy->record_no,
            'employer_name' => 'Marie Doe',
            'employer_address' => 'Brgy Atlag, Malolos Bulacan',
            'employer_phone' => '09062632154',
            'father_name' => 'John Walsh Delano',
            'father_address' => 'Brgy Atlag, Malolos Bulacan',
            'father_phone' => '09752632154',
            'mother_maiden_name' => 'Mary Walsh Delana',
            'mother_address' => 'E3 Maginhawa St Sikatuna Village, Quezon City',
            'mother_phone' => '09062632154',
            'spouse_name' => 'Anna Marie Walsh Delana',
            'spouse_address' => 'E3 Maginhawa St Sikatuna Village, Quezon City',
            'spouse_phone' => '09062777154',
        ]);

        $patients_Dummy_four = $patients_Dummy->emergency_four()->create([
            'record_id' => $patients_Dummy->record_no,
            'start_date' => '2023-01-14',
            'start_time' => '06:58',
            'end_date' => '2023-01-16',
            'end_time' => '06:57',
            'total_days' => '1 days, 23 hours, 59 minutes',
            'admitting_physician' => 'Dr. Sven Doe',
            'admitting_clerk' => 'Nurse Crystal Maiden Doe',
            'admission_type' => 'Onsite',
            'referred_by' => 'Nurse Crystal Maiden Doe',
        ]);

        $patients_Dummy_five = $patients_Dummy->emergency_five()->create([
            'record_id' => $patients_Dummy->record_no,
            'ssc' => 'd',
            'alert_allergic' => 'shrimp',
            'hospitalization_plan' => 'SIDC',
            'health_insurance' => 'PhilHealth',
            'coverage_insurance' => 'Full Coverage',
            'furnished_by' => 'Mary Winowa Doe',
            'informant_address' => 'Malolos Bulacan',
            'relation_to_patient' => 'Sister',
        ]);

        $patients_Dummy_six = $patients_Dummy->emergency_six()->create([
            'record_id' => $patients_Dummy->record_no,
            'admission_diagnosis' => 'Admit it as Possible',
            'principal_diagnosis' => 'Surgery at left foot',
            'other_diagnosis' => 'none',
            'idc_code' => '15874',
            'principal_operation' => 'Major Surgery',
            'other_operation' => 'none',
            'icpm_code' => '845874356415694',
        ]);

        dd($id, $patients_Dummy, $patients_Dummy_two, $patients_Dummy_three, $patients_Dummy_four, $patients_Dummy_five, $patients_Dummy_six);
    }
}