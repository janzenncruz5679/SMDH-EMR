<?php

namespace App\Http\Controllers;

use App\Models\First_admission;
use App\Models\Second_admission;
use App\Models\Third_admission;
use App\Models\Fourth_admission;
use App\Models\Fifth_admission;
use App\Models\Sixth_admission;
use App\Models\Patient_id;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use Carbon\Carbon;

class PatientController extends Controller
{
    public function admission()
    {
        $patientDatas = First_admission::select('id', 'patient_id', 'first_name', 'middle_name', 'last_name', 'age', 'gender', 'phone')->paginate(18);

        // $patientDatas = collect($patientDatas)->paginate(15);
        return view('user.patientSection.admission', [
            'patientDatas' => $patientDatas,
        ]);
    }
    public function admissionSearch(Request $request)
    {

        if ($request->search) {
            $searchTerms = explode(' ', $request->search);
            $patientDatas = First_admission::where('type', '=', 'Admission')
                ->where(function ($q) use ($searchTerms) {
                    foreach ($searchTerms as $term) {
                        $q->orWhere('full_name', 'LIKE', '%' . $term . '%');
                    }
                })
                ->paginate(18);
            return view('user.patientSection.admission_search', [
                'patientDatas' => $patientDatas,
            ]);
        } else {
            return view('user.patientSection.admission_search');
        }
    }

    //view admission patient form
    public function viewAdmission($id)
    {

        $view_first = First_admission::find($id);
        $view_second = Second_admission::find($id);
        $view_third = Third_admission::find($id);
        $view_fourth = Fourth_admission::find($id);
        $view_fifth = Fifth_admission::find($id);
        $view_sixth = Sixth_admission::find($id);
        return view('user.patientSection.infoAdmission', [
            'view_first' => $view_first,
            'view_second' => $view_second,
            'view_third' => $view_third,
            'view_fourth' => $view_fourth,
            'view_fifth' => $view_fifth,
            'view_sixth' => $view_sixth,
        ]);
    }

    //get add admission patient form
    public function addPatient()
    {
        return view('user.patientSection.addpatient');
    }
    //post add admission form patient
    // public function submit_admit_patient(Request $request)
    // {
    //     // dump(Carbon::createFromFormat('Y-m-d', $request->birtday));
    //     // dump(Carbon::parse($request->birthday)->age);
    //     // dump(($request->birthday));
    //     $request->validate([
    //         //first admission
    //         'address' => 'required',
    //         'last_name' => 'required',
    //         'first_name' => 'required',
    //         'ward_room_bed_service' => 'required',
    //         'gender' => 'required',
    //         'phone' => 'required',
    //         'birthday' => 'required',

    //         //second_admission
    //         'perma_address' => 'required',
    //         'civil_status' => 'required',
    //         'birthplace' => 'required',
    //         'nationality' => 'required',
    //         'religion' => 'required',

    //         //third_admission

    //         //fourth_admission
    //         'start_date' => 'required',
    //         'start_time' => 'required',
    //         'end_date' => 'required',
    //         'end_time' => 'required',
    //         'admitting_physician' => 'required',
    //         'admitting_clerk' => 'required',
    //         'admission_type' => 'required',
    //         'referred_by' => 'required',

    //         //fifth_admission
    //         'ssc' => 'required',
    //         'alert_allergic' => 'required',
    //         'health_insurance' => 'required',
    //         'coverage_insurance' => 'required',
    //         'furnished_by' => 'required',
    //         'informant_address' => 'required',
    //         'relation_to_patient' => 'required',

    //         //sixth_admission
    //         'admission_diagnosis' => 'required',
    //         'principal_diagnosis' => 'required',
    //         'other_diagnosis' => 'required',
    //         'idc_code' => 'required',
    //         'principal_operation' => 'required',
    //         'other_operation' => 'required',
    //         'icpm_code' => 'required',
    //     ], [
    //         //first
    //         'address.required' => '*this field is required',
    //         'last_name.required' => '*this field is required',
    //         'first_name.required' => '*this field is required',
    //         'ward_room_bed_service.required' => '*this field is required',
    //         'gender.required' => '*required',
    //         'phone' => '*this field is required',
    //         'birthday' => '*this field is required',

    //         //second
    //         'perma_address.required' => '*this field is required',
    //         'civil_status.required' => '*this field is required',
    //         'birthplace' => '*this field is required',
    //         'nationality' => '*this field is required',
    //         'religion' => '*this field is required',

    //         //third

    //         //fourth
    //         'start_date.required' => '*this field is required',
    //         'start_time.required' => '*this field is required',
    //         'end_date.required' => '*this field is required',
    //         'end_time.required' => '*this field is required',
    //         'admitting_physician.required' => '*this field is required',
    //         'admitting_clerk.required' => '*this field is required',
    //         'admission_type.required' => '*this field is required',
    //         'referred_by.required' => '*this field is required',

    //         //fifth
    //         'ssc.required' => '*this field is required',
    //         'alert_allergic.required' => '*this field is required',
    //         'health_insurance.required' => '*this field is required',
    //         'coverage_insurance.required' => '*this field is required',
    //         'furnished_by.required' => '*this field is required',
    //         'informant_address.required' => '*this field is required',
    //         'relation_to_patient.required' => '*this field is required',

    //         //sixth
    //         'admission_diagnosis.required' => '*this field is required',
    //         'principal_diagnosis.required' => '*this field is required',
    //         'other_diagnosis.required' => '*this field is required',
    //         'idc_code.required' => '*this field is required',
    //         'principal_operation.required' => '*this field is required',
    //         'other_operation.required' => '*this field is required',
    //         'icpm_code.required' => '*this field is required',

    //     ]);

    //     $admission_sixth = new Sixth_admission();
    //     $admission_sixth->admission_diagnosis = $request->input('admission_diagnosis');
    //     $admission_sixth->principal_diagnosis = $request->input('principal_diagnosis');
    //     $admission_sixth->other_diagnosis = $request->input('other_diagnosis');
    //     $admission_sixth->idc_code = $request->input('idc_code');
    //     $admission_sixth->principal_operation = $request->input('principal_operation');
    //     $admission_sixth->other_operation = $request->input('other_operation');
    //     $admission_sixth->icpm_code = $request->input('icpm_code');

    //     $admission_fifth = new Fifth_admission();
    //     $admission_fifth->ssc = $request->input('ssc');
    //     $admission_fifth->alert_allergic = $request->input('alert_allergic');
    //     $admission_fifth->hospitalization_plan = $request->input('hospitalization_plan');
    //     $admission_fifth->health_insurance = $request->input('health_insurance');
    //     $admission_fifth->coverage_insurance = $request->input('coverage_insurance');
    //     $admission_fifth->furnished_by = $request->input('furnished_by');
    //     $admission_fifth->informant_address = $request->input('informant_address');
    //     $admission_fifth->relation_to_patient = $request->input('relation_to_patient');

    //     $admission_fourth  = new Fourth_admission();
    //     $admission_fourth->start_date = $request->input('start_date');
    //     $admission_fourth->start_time = $request->input('start_time');
    //     $admission_fourth->end_date = $request->input('end_date');
    //     $admission_fourth->end_time = $request->input('end_time');
    //     $admission_fourth->total_days = $request->input('total_days');
    //     $admission_fourth->admitting_physician = $request->input('admitting_physician');
    //     $admission_fourth->admitting_clerk = $request->input('admitting_clerk');
    //     $admission_fourth->admission_type = $request->input('admission_type');
    //     $admission_fourth->referred_by = $request->input('referred_by');

    //     $admission_third  = new Third_admission();
    //     $admission_third->employer_name = $request->input('employer_name');
    //     $admission_third->employer_address = $request->input('employer_address');
    //     $admission_third->employer_phone = $request->input('employer_phone');
    //     $admission_third->father_name = $request->input('father_name');
    //     $admission_third->father_address = $request->input('father_address');
    //     $admission_third->father_phone = $request->input('father_phone');
    //     $admission_third->mother_maiden_name = $request->input('mother_maiden_name');
    //     $admission_third->mother_address = $request->input('mother_address');
    //     $admission_third->mother_phone = $request->input('mother_phone');
    //     $admission_third->spouse_name = $request->input('spouse_name');
    //     $admission_third->spouse_address = $request->input('spouse_address');
    //     $admission_third->spouse_phone = $request->input('spouse_phone');

    //     $admission_second = new Second_admission();
    //     $admission_second->perma_address = $request->input('perma_address');
    //     $admission_second->civil_status = $request->input('civil_status');
    //     $admission_second->birthplace = $request->input('birthplace');
    //     $admission_second->nationality = $request->input('nationality');
    //     $admission_second->religion = $request->input('religion');
    //     $admission_second->occupation = $request->input('occupation');

    //     $admission_first = new First_admission();
    //     $admission_first->address = $request->input('address');
    //     $admission_first->sr_no = $request->input('sr_no');
    //     $admission_first->last_name = $request->input('last_name');
    //     $admission_first->first_name = $request->input('first_name');
    //     $admission_first->middle_name = $request->input('middle_name');
    //     $admission_first->type = $request->input('type');
    //     $admission_first->ward_room_bed_service = $request->input('ward_room_bed_service');
    //     $admission_first->age = Carbon::parse($request->birthday)->age;
    //     $admission_first->gender = $request->input('gender');
    //     $admission_first->phone = $request->input('phone');
    //     $admission_first->birthday = $request->input('birthday');

    //     $admission_base = new Patient_id();
    //     $admission_base->save();

    //     $admission_base->admission_table()->save($admission_first);
    //     $admission_first->admission_two()->save($admission_second);
    //     $admission_second->admission_third()->save($admission_third);
    //     $admission_third->admission_fourth()->save($admission_fourth);
    //     $admission_fourth->admission_fifth()->save($admission_fifth);
    //     $admission_fifth->admission_sixth()->save($admission_sixth);
    //     return redirect('/patientPage/admission');
    // }

    //update admission patient form
    public function updateAdmission($id)
    {
        $view_first = First_admission::find($id);
        $view_second = Second_admission::find($id);
        $view_third = Third_admission::find($id);
        $view_fourth = Fourth_admission::find($id);
        $view_fifth = Fifth_admission::find($id);
        $view_sixth = Sixth_admission::find($id);
        return view('user.patientSection.updatepatient', [
            'view_first' => $view_first,
            'view_second' => $view_second,
            'view_third' => $view_third,
            'view_fourth' => $view_fourth,
            'view_fifth' => $view_fifth,
            'view_sixth' => $view_sixth,
        ]);
    }

    public function editAdmission(Request $request, $id)
    {
        $edit_first = First_admission::find($id);
        $edit_second = Second_admission::find($id);
        $edit_third = Third_admission::find($id);
        $edit_fourth = Fourth_admission::find($id);
        $edit_fifth = Fifth_admission::find($id);
        $edit_sixth = Sixth_admission::find($id);

        $request->validate([
            //first admission
            'address' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'ward_room_bed_service' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'birthday' => 'required',

            //second_admission
            'perma_address' => 'required',
            'civil_status' => 'required',
            'birthplace' => 'required',
            'nationality' => 'required',
            'religion' => 'required',

            //third_admission

            //fourth_admission
            'start_date' => 'required',
            'start_time' => 'required',
            'end_date' => 'required',
            'end_time' => 'required',
            'admitting_physician' => 'required',
            'admitting_clerk' => 'required',
            'admission_type' => 'required',
            'referred_by' => 'required',

            //fifth_admission
            'ssc' => 'required',
            'alert_allergic' => 'required',
            'health_insurance' => 'required',
            'coverage_insurance' => 'required',
            'furnished_by' => 'required',
            'informant_address' => 'required',
            'relation_to_patient' => 'required',

            //sixth_admission
            'admission_diagnosis' => 'required',
            'principal_diagnosis' => 'required',
            'other_diagnosis' => 'required',
            'idc_code' => 'required',
            'principal_operation' => 'required',
            'other_operation' => 'required',
            'icpm_code' => 'required',
        ], [
            //first
            'address.required' => '*this field is required',
            'last_name.required' => '*this field is required',
            'first_name.required' => '*this field is required',
            'ward_room_bed_service.required' => '*this field is required',
            'gender.required' => '*required',
            'phone' => '*this field is required',
            'birthday' => '*this field is required',

            //second
            'perma_address.required' => '*this field is required',
            'civil_status.required' => '*this field is required',
            'birthplace' => '*this field is required',
            'nationality' => '*this field is required',
            'religion' => '*this field is required',

            //third

            //fourth
            'start_date.required' => '*this field is required',
            'start_time.required' => '*this field is required',
            'end_date.required' => '*this field is required',
            'end_time.required' => '*this field is required',
            'admitting_physician.required' => '*this field is required',
            'admitting_clerk.required' => '*this field is required',
            'admission_type.required' => '*this field is required',
            'referred_by.required' => '*this field is required',

            //fifth
            'ssc.required' => '*this field is required',
            'alert_allergic.required' => '*this field is required',
            'health_insurance.required' => '*this field is required',
            'coverage_insurance.required' => '*this field is required',
            'furnished_by.required' => '*this field is required',
            'informant_address.required' => '*this field is required',
            'relation_to_patient.required' => '*this field is required',

            //sixth
            'admission_diagnosis.required' => '*this field is required',
            'principal_diagnosis.required' => '*this field is required',
            'other_diagnosis.required' => '*this field is required',
            'idc_code.required' => '*this field is required',
            'principal_operation.required' => '*this field is required',
            'other_operation.required' => '*this field is required',
            'icpm_code.required' => '*this field is required',

        ]);


        $edit_sixth->admission_diagnosis = $request->input('admission_diagnosis');
        $edit_sixth->principal_diagnosis = $request->input('principal_diagnosis');
        $edit_sixth->other_diagnosis = $request->input('other_diagnosis');
        $edit_sixth->idc_code = $request->input('idc_code');
        $edit_sixth->principal_operation = $request->input('principal_operation');
        $edit_sixth->other_operation = $request->input('other_operation');
        $edit_sixth->icpm_code = $request->input('icpm_code');
        $edit_sixth->save();

        $edit_fifth->ssc = $request->input('ssc');
        $edit_fifth->alert_allergic = $request->input('alert_allergic');
        $edit_fifth->hospitalization_plan = $request->input('hospitalization_plan');
        $edit_fifth->health_insurance = $request->input('health_insurance');
        $edit_fifth->coverage_insurance = $request->input('coverage_insurance');
        $edit_fifth->furnished_by = $request->input('furnished_by');
        $edit_fifth->informant_address = $request->input('informant_address');
        $edit_fifth->relation_to_patient = $request->input('relation_to_patient');
        $edit_fifth->save();

        $edit_fourth->start_date = $request->input('start_date');
        $edit_fourth->start_time = $request->input('start_time');
        $edit_fourth->end_date = $request->input('end_date');
        $edit_fourth->end_time = $request->input('end_time');
        $edit_fourth->total_days = $request->input('total_days');
        $edit_fourth->admitting_physician = $request->input('admitting_physician');
        $edit_fourth->admitting_clerk = $request->input('admitting_clerk');
        $edit_fourth->admission_type = $request->input('admission_type');
        $edit_fourth->referred_by = $request->input('referred_by');
        $edit_fourth->save();

        $edit_third->employer_name = $request->input('employer_name');
        $edit_third->employer_address = $request->input('employer_address');
        $edit_third->employer_phone = $request->input('employer_phone');
        $edit_third->father_name = $request->input('father_name');
        $edit_third->father_address = $request->input('father_address');
        $edit_third->father_phone = $request->input('father_phone');
        $edit_third->mother_maiden_name = $request->input('mother_maiden_name');
        $edit_third->mother_address = $request->input('mother_address');
        $edit_third->mother_phone = $request->input('mother_phone');
        $edit_third->spouse_name = $request->input('spouse_name');
        $edit_third->spouse_address = $request->input('spouse_address');
        $edit_third->spouse_phone = $request->input('spouse_phone');
        $edit_third->save();

        $edit_second->perma_address = $request->input('perma_address');
        $edit_second->civil_status = $request->input('civil_status');
        $edit_second->birthplace = $request->input('birthplace');
        $edit_second->nationality = $request->input('nationality');
        $edit_second->religion = $request->input('religion');
        $edit_second->occupation = $request->input('occupation');
        $edit_second->save();

        $edit_first->address = $request->input('address');
        $edit_first->sr_no = $request->input('sr_no');
        $edit_first->last_name = $request->input('last_name');
        $edit_first->first_name = $request->input('first_name');
        $edit_first->middle_name = $request->input('middle_name');
        $edit_first->ward_room_bed_service = $request->input('ward_room_bed_service');
        $edit_first->age = $request->input('age');
        $edit_first->gender = $request->input('gender');
        $edit_first->phone = $request->input('phone');
        $edit_first->birthday = $request->input('birthday');
        $edit_first->save();
        return redirect('/patientPage/admission');
    }
}