<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Patient_id;
use App\Models\First_admission;
use App\Models\Second_admission;
use App\Models\Third_admission;
use App\Models\Fourth_admission;
use App\Models\Fifth_admission;
use App\Models\Sixth_admission;


class MultiStepForm extends Component
{
    use WithFileUploads;

    public $address;
    public $sr_no;
    public $last_name;
    public $first_name;
    public $middle_name;
    public $type;
    public $ward_room_bed_service;
    public $age;
    public $gender;
    public $phone;
    public $birthday;
    public $perma_address;
    public $civil_status;
    public $birthplace;
    public $nationality;
    public $religion;
    public $occupation;

    public $employer_name;
    public $employer_address;
    public $employer_address_key = '';
    public $employer_phone;
    public $father_name;
    public $father_address;
    public $father_phone;
    public $mother_maiden_name;
    public $mother_address;
    public $mother_phone;
    public $spouse_name;
    public $spouse_address;
    public $spouse_phone;

    public $start_date;
    public $start_time;
    public $end_date;
    public $end_time;
    public $total_days;
    public $admitting_physician;
    public $admitting_clerk;
    public $admission_type;
    public $referred_by;

    public $ssc;
    public $alert_allergic;
    public $hospitalization_plan;
    public $health_insurance;
    public $coverage_insurance;
    public $furnished_by;
    public $informant_address;
    public $relation_to_patient;

    public $admission_diagnosis;
    public $principal_diagnosis;
    public $other_diagnosis;
    public $idc_code;
    public $principal_operation;
    public $other_operation;
    public $icpm_code;

    public $totalSteps = 5;
    public $currentStep = 1;


    public function mount()
    {
        $this->currentStep = 1;
        $this->type = "Admission";
    }

    // public function render()
    // {
    //     return view('livewire.multi-step-form');
    // }

    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function validateData()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'address' => 'required',
                'last_name' => 'required',
                'first_name' => 'required',
                'ward_room_bed_service' => 'required',
                'gender' => 'required',
                'phone' => 'required',
                'birthday' => 'required',
                'perma_address' => 'required',
                'civil_status' => 'required',
                'birthplace' => 'required',
                'nationality' => 'required',
                'religion' => 'required',
            ], [
                'address.required' => '*this field is required',
                'last_name.required' => '*this field is required',
                'first_name.required' => '*this field is required',
                'ward_room_bed_service.required' => '*this field is required',
                'gender.required' => '*required',
                'phone' => '*this field is required',
                'birthday' => '*this field is required',
                'perma_address.required' => '*this field is required',
                'civil_status.required' => '*this field is required',
                'birthplace' => '*this field is required',
                'nationality' => '*this field is required',
                'religion' => '*this field is required',
            ]);
        }

        // if ($this->currentStep == 2) {
        //     $this->validate([
        //         'employer_name' => 'required',
        //         'employer_address' => 'required',
        //         'employer_phone' => 'required',
        //         'father_name' => 'required',
        //         'father_address' => 'required',
        //         'father_phone' => 'required',
        //         'mother_maiden_name' => 'required',
        //         'mother_address' => 'required',
        //         'mother_phone' => 'required',
        //         'spouse_name' => 'required',
        //         'spouse_address' => 'required',
        //         'spouse_phone' => 'required',

        //     ]);
        // }

        if ($this->currentStep == 3) {
            $this->validate([
                'start_date' => 'required',
                'start_time' => 'required',
                'end_date' => 'required',
                'end_time' => 'required',
                'admitting_physician' => 'required',
                'admitting_clerk' => 'required',
                'admission_type' => 'required',
                'referred_by' => 'required',
            ], [
                //fourth
                'start_date.required' => '*this field is required',
                'start_time.required' => '*this field is required',
                'end_date.required' => '*this field is required',
                'end_time.required' => '*this field is required',
                'admitting_physician.required' => '*this field is required',
                'admitting_clerk.required' => '*this field is required',
                'admission_type.required' => '*this field is required',
                'referred_by.required' => '*this field is required',
            ]);
        }

        if ($this->currentStep == 4) {
            $this->validate([
                'ssc' => 'required',
                'alert_allergic' => 'required',
                'health_insurance' => 'required',
                'coverage_insurance' => 'required',
                'furnished_by' => 'required',
                'informant_address' => 'required',
                'relation_to_patient' => 'required',
            ], [
                'ssc.required' => '*this field is required',
                'alert_allergic.required' => '*this field is required',
                'health_insurance.required' => '*this field is required',
                'coverage_insurance.required' => '*this field is required',
                'furnished_by.required' => '*this field is required',
                'informant_address.required' => '*this field is required',
                'relation_to_patient.required' => '*this field is required',
            ]);
        }

        if ($this->currentStep == 5) {
            $this->validate([
                //sixth_admission
                'admission_diagnosis' => 'required',
                'principal_diagnosis' => 'required',
                'other_diagnosis' => 'required',
                'idc_code' => 'required',
                'principal_operation' => 'required',
                'other_operation' => 'required',
                'icpm_code' => 'required',
            ], [
                'admission_diagnosis.required' => '*this field is required',
                'principal_diagnosis.required' => '*this field is required',
                'other_diagnosis.required' => '*this field is required',
                'idc_code.required' => '*this field is required',
                'principal_operation.required' => '*this field is required',
                'other_operation.required' => '*this field is required',
                'icpm_code.required' => '*this field is required',
            ]);
        }
    }

    public function submit()
    {
        $patients_Dummy_id = Patient_id::create();
        $patients_Dummy =  $patients_Dummy_id->admission_table()->create([
            'patient_id' => $patients_Dummy_id->id,
            'address' => $this->address,
            'sr_no' => $this->sr_no,
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'type' => $this->type,
            'gender' => $this->gender,
            'ward_room_bed_service' => $this->ward_room_bed_service,
            'age' => $this->age,
            'phone' => $this->phone,
            'birthday' => $this->birthday,
        ]);

        $patients_Dummy->admission_two()->create([
            'record_id' => $patients_Dummy->record_no,
            'civil_status' => $this->civil_status,
            'perma_address' => $this->perma_address,
            'birthplace' => $this->birthplace,
            'nationality' => $this->nationality,
            'religion' => $this->religion,
            'occupation' => $this->occupation,
        ]);

        $patients_Dummy->admission_three()->create([
            'record_id' => $patients_Dummy->record_no,
            'employer_name' => $this->employer_name,
            'employer_address' => $this->employer_address,
            'employer_phone' => $this->employer_phone,
            'father_name' => $this->father_name,
            'father_address' => $this->father_address,
            'father_phone' => $this->father_phone,
            'mother_maiden_name' => $this->mother_maiden_name,
            'mother_address' => $this->mother_address,
            'mother_phone' => $this->mother_phone,
            'spouse_name' => $this->spouse_name,
            'spouse_address' => $this->spouse_address,
            'spouse_phone' => $this->spouse_name,
        ]);

        $patients_Dummy->admission_four()->create([
            'record_id' => $patients_Dummy->record_no,
            'start_date' => $this->start_date,
            'start_time' => $this->start_time,
            'end_date' => $this->end_date,
            'end_time' => $this->end_time,
            'total_days' => $this->total_days,
            'admitting_physician' => $this->admitting_physician,
            'admitting_clerk' => $this->admitting_clerk,
            'admission_type' => $this->admission_type,
            'referred_by' => $this->referred_by,
        ]);

        $patients_Dummy->admission_five()->create([
            'record_id' => $patients_Dummy->record_no,
            'ssc' => $this->ssc,
            'alert_allergic' => $this->alert_allergic,
            'hospitalization_plan' => $this->hospitalization_plan,
            'health_insurance' => $this->health_insurance,
            'coverage_insurance' => $this->coverage_insurance,
            'furnished_by' => $this->furnished_by,
            'informant_address' => $this->informant_address,
            'relation_to_patient' => $this->relation_to_patient,
        ]);

        $patients_Dummy->admission_six()->create([
            'record_id' => $patients_Dummy->record_no,
            'admission_diagnosis' => $this->admission_diagnosis,
            'principal_diagnosis' => $this->principal_diagnosis,
            'other_diagnosis' => $this->other_diagnosis,
            'idc_code' => $this->idc_code,
            'principal_operation' => $this->principal_operation,
            'other_operation' => $this->other_operation,
            'icpm_code' => $this->icpm_code,
        ]);


        return redirect('/patientPage/admission');
    }
}