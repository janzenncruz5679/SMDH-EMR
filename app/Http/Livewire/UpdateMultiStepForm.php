<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\First_admission;
use App\Models\Second_admission;
use App\Models\Third_admission;
use App\Models\Fourth_admission;
use App\Models\Fifth_admission;
use App\Models\Sixth_admission;
use App\Models\Patient_id;
use Livewire\WithPagination;

class UpdateMultiStepForm extends Component
{
    use WithPagination;

    public $record_id;
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

    public $view_first;
    public $view_second;
    public $view_third;
    public $view_fourth;
    public $view_fifth;
    public $view_sixth;

    public $patient_id;
    public $full_name;
    public $search;

    public $patientDatas;

    public $update_admission = false;
    public $totalSteps = 5;
    public $currentStep = 1;



    public function mount()
    {
        $this->patientDatas = First_admission::all();
        // $this->patientDatas = First_admission::paginate(18);
        // $this->view_second = Second_admission::all();
        // $this->view_third = Third_admission::all();
        // $this->view_fourth = Fourth_admission::all();
        // $this->view_fifth = Fifth_admission::all();
        // $this->view_sixth = Sixth_admission::all();
        $this->currentStep = 1;
    }

    public function increaseStep()
    {
        $this->resetErrorBag();
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

    public function updateAdmission($id)
    {
        $view_first = First_admission::find($id);
        $view_second = Second_admission::find($id);
        $view_third = Third_admission::find($id);
        $view_fourth = Fourth_admission::find($id);
        $view_fifth = Fifth_admission::find($id);
        $view_sixth = Sixth_admission::find($id);


        //first form
        $this->patient_id = $view_first->patient_id;
        $this->address = $view_first->address;
        $this->sr_no = $view_first->sr_no;
        $this->type = $view_first->type;
        $this->full_name = $view_first->full_name;
        $this->last_name = $view_first->last_name;
        $this->middle_name = $view_first->middle_name;
        $this->first_name = $view_first->first_name;
        $this->ward_room_bed_service = $view_first->ward_room_bed_service;
        $this->birthday = $view_first->birthday;
        $this->age = $view_first->age;
        $this->birthplace = $view_second->birthplace;
        $this->phone = $view_first->phone;
        $this->gender = $view_first->gender;


        //second form
        $this->civil_status = $view_second->civil_status;
        $this->perma_address = $view_second->perma_address;
        $this->nationality = $view_second->nationality;
        $this->religion = $view_second->religion;
        $this->occupation = $view_second->occupation;

        //third form
        $this->employer_name = $view_third->employer_name;
        $this->employer_address = $view_third->employer_address;
        $this->employer_phone = $view_third->employer_phone;
        $this->father_name = $view_third->father_name;
        $this->father_address = $view_third->father_address;
        $this->father_phone = $view_third->father_phone;
        $this->mother_maiden_name = $view_third->mother_maiden_name;
        $this->mother_address = $view_third->mother_address;
        $this->mother_phone = $view_third->mother_phone;
        $this->spouse_name = $view_third->spouse_name;
        $this->spouse_address = $view_third->spouse_address;
        $this->spouse_phone = $view_third->spouse_phone;

        //fourth form
        $this->start_date = $view_fourth->start_date;
        $this->end_date = $view_fourth->end_date;
        $this->start_time = $view_fourth->start_time;
        $this->end_time = $view_fourth->end_time;
        $this->total_days = $view_fourth->total_days;
        $this->admitting_physician = $view_fourth->admitting_physician;
        $this->admitting_clerk = $view_fourth->admitting_clerk;
        $this->admission_type = $view_fourth->admission_type;
        $this->referred_by = $view_fourth->referred_by;

        //fifth form
        $this->ssc = $view_fifth->ssc;
        $this->alert_allergic = $view_fifth->alert_allergic;
        $this->hospitalization_plan = $view_fifth->hospitalization_plan;
        $this->health_insurance = $view_fifth->health_insurance;
        $this->coverage_insurance = $view_fifth->coverage_insurance;
        $this->furnished_by = $view_fifth->furnished_by;
        $this->informant_address = $view_fifth->informant_address;
        $this->relation_to_patient = $view_fifth->relation_to_patient;

        //sixth form
        $this->admission_diagnosis = $view_sixth->admission_diagnosis;
        $this->principal_diagnosis = $view_sixth->principal_diagnosis;
        $this->other_diagnosis = $view_sixth->other_diagnosis;
        $this->idc_code = $view_sixth->idc_code;
        $this->principal_operation = $view_sixth->principal_operation;
        $this->other_operation = $view_sixth->other_operation;
        $this->icpm_code = $view_sixth->icpm_code;


        $this->update_admission = true;
    }

    public function submitAdmission()
    {
        $submit_first = First_admission::find($this->patient_id);
        $submit_second = Second_admission::find($this->patient_id);
        $submit_third = Third_admission::find($this->patient_id);
        $submit_fourth = Fourth_admission::find($this->patient_id);
        $submit_fifth = Fifth_admission::find($this->patient_id);
        $submit_sixth = Sixth_admission::find($this->patient_id);

        $submit_first->address = $this->address;
        $submit_first->sr_no = $this->sr_no;
        $submit_first->type = $this->type;
        $submit_first->full_name = $this->full_name;
        $submit_first->last_name = $this->last_name;
        $submit_first->middle_name = $this->middle_name;
        $submit_first->first_name = $this->first_name;
        $submit_first->ward_room_bed_service = $this->ward_room_bed_service;
        $submit_first->birthday = $this->birthday;
        $submit_first->age = $this->age;
        $submit_first->phone = $this->phone;
        $submit_first->gender = $this->gender;
        $submit_first->save();

        $submit_second->perma_address = $this->perma_address;
        $submit_second->civil_status = $this->civil_status;
        $submit_second->birthplace = $this->birthplace;
        $submit_second->nationality = $this->nationality;
        $submit_second->religion = $this->religion;
        $submit_second->occupation = $this->occupation;
        $submit_second->save();

        $submit_third->employer_name = $this->employer_name;
        $submit_third->employer_phone = $this->employer_phone;
        $submit_third->employer_address = $this->employer_address;
        $submit_third->father_name = $this->father_name;
        $submit_third->father_phone = $this->father_phone;
        $submit_third->father_address = $this->father_address;
        $submit_third->mother_maiden_name = $this->mother_maiden_name;
        $submit_third->mother_phone = $this->mother_phone;
        $submit_third->mother_address = $this->mother_address;
        $submit_third->spouse_name = $this->spouse_name;
        $submit_third->spouse_phone = $this->spouse_phone;
        $submit_third->spouse_address = $this->spouse_address;
        $submit_third->save();

        $submit_fourth->start_date = $this->start_date;
        $submit_fourth->start_time = $this->start_time;
        $submit_fourth->end_date = $this->end_date;
        $submit_fourth->end_time = $this->end_time;
        $submit_fourth->total_days = $this->total_days;
        $submit_fourth->admitting_physician = $this->admitting_physician;
        $submit_fourth->admission_type = $this->admission_type;
        $submit_fourth->referred_by = $this->referred_by;
        $submit_fourth->save();

        $submit_fifth->ssc = $this->ssc;
        $submit_fifth->alert_allergic = $this->alert_allergic;
        $submit_fifth->health_insurance = $this->health_insurance;
        $submit_fifth->coverage_insurance = $this->coverage_insurance;
        $submit_fifth->furnished_by = $this->furnished_by;
        $submit_fifth->informant_address = $this->informant_address;
        $submit_fifth->relation_to_patient = $this->relation_to_patient;
        $submit_fifth->save();

        $submit_sixth->admission_diagnosis = $this->admission_diagnosis;
        $submit_sixth->principal_diagnosis = $this->principal_diagnosis;
        $submit_sixth->other_diagnosis = $this->other_diagnosis;
        $submit_sixth->idc_code = $this->idc_code;
        $submit_sixth->principal_operation = $this->principal_operation;
        $submit_sixth->other_operation = $this->other_operation;
        $submit_sixth->icpm_code = $this->icpm_code;
        $submit_sixth->save();

        return redirect('/patientPage/admission');
    }

    public function viewFullInfo()
    {

        return view('update-multi-step-form');
    }

    // public function render()
    // {
    //     return view('livewire.update-multi-step-form', [
    //         'patienDatas' => First_admission::paginate(18),
    //     ]);
    // }

    // public function search()
    // {
    //     $searchTerms = explode(' ', $this->search);
    //     return First_admission::where('first_name', 'like', "%{$this->query}%")->paginate(18);
    // }

    // public function updateUser()
    // {
    //     $this->user->update([
    //         'name' => $this->user->name,
    //         'email' => $this->user->email
    //     ]);
    // }

    // public function admission()
    // {
    //     $patientDatas = First_admission::select('id', 'patient_id', 'first_name', 'middle_name', 'last_name', 'age', 'gender', 'phone')->paginate(18);

    //     // $patientDatas = collect($patientDatas)->paginate(15);
    //     return view('livewore.multi-step-form', [
    //         'patientDatas' => $patientDatas,
    //     ]);
    // }
}
