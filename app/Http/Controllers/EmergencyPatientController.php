<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Second_emergency;
use App\Models\Third_emergency;
use App\Models\Fifth_emergency;
use App\Models\First_admission;
use App\Models\First_emergency;
use App\Models\Fourth_emergency;
use App\Models\Patient_id;
use App\Models\Sixth_emergency;
use Carbon\Carbon;

class EmergencyPatientController extends Controller
{
    ///////////////EMERGENCY PATIENTS
    public function emergency()
    {
        $patientDatas = First_emergency::select('id', 'patient_id', 'first_name', 'middle_name', 'last_name', 'age', 'gender', 'phone')
            ->where('type', '=', 'Emergency')
            ->paginate(18);

        $patientIds = Patient_id::select('id')->paginate(18);



        // $patientDatas = collect($patientDatas)->paginate(15);
        return view('user.patientSection.emergency.emergency_view', [
            'patientDatas' => $patientDatas,
            'patientIds' => $patientIds,
        ]);
    }

    public function addEmergency()
    {
        return view('user.patientSection.emergency.addemergency');
    }

    public function emergencySearch(Request $request)
    {

        if ($request->search) {
            $searchTerms = explode(' ', $request->search);
            $patientDatas = First_emergency::where('type', '=', 'Emergency')
                ->where(function ($q) use ($searchTerms) {
                    foreach ($searchTerms as $term) {
                        $q->orWhere('full_name', 'LIKE', '%' . $term . '%');
                    }
                })
                ->paginate(18);
            return view('user.patientSection.emergency.emergency_view_search', [
                'patientDatas' => $patientDatas,
            ]);
        } else {
            return view('user.patientSection.emergency.emergency_view_search');
        }
    }

    public function viewEmergency($id)
    {

        $view_first = First_emergency::find($id);
        $view_second = Second_emergency::find($id);
        $view_third = Third_emergency::find($id);
        $view_fourth = Fourth_emergency::find($id);
        $view_fifth = Fifth_emergency::find($id);
        $view_sixth = Sixth_emergency::find($id);
        return view('user.patientSection.emergency.infoEmergency', [
            'view_first' => $view_first,
            'view_second' => $view_second,
            'view_third' => $view_third,
            'view_fourth' => $view_fourth,
            'view_fifth' => $view_fifth,
            'view_sixth' => $view_sixth,
        ]);
    }

    public function submit_emergency_patient(Request $request)
    {

        $request->validate([
            //first emergency
            'address' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'ward_room_bed_service' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'birthday' => 'required',

            //second_emergency
            'perma_address' => 'required',
            'civil_status' => 'required',
            'birthplace' => 'required',
            'nationality' => 'required',
            'religion' => 'required',

            //fourth_emergency
            'start_date' => 'required',
            'start_time' => 'required',
            'end_date' => 'required',
            'end_time' => 'required',
            'admitting_physician' => 'required',
            'admitting_clerk' => 'required',
            'admission_type' => 'required',
            'referred_by' => 'required',

            //fifth_emergency
            'ssc' => 'required',
            'alert_allergic' => 'required',
            'health_insurance' => 'required',
            'coverage_insurance' => 'required',
            'furnished_by' => 'required',
            'informant_address' => 'required',
            'relation_to_patient' => 'required',

            //sixth_emergency
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

        $emergency_sixth = new Sixth_emergency();
        $emergency_sixth->admission_diagnosis = $request->input('admission_diagnosis');
        $emergency_sixth->principal_diagnosis = $request->input('principal_diagnosis');
        $emergency_sixth->other_diagnosis = $request->input('other_diagnosis');
        $emergency_sixth->idc_code = $request->input('idc_code');
        $emergency_sixth->principal_operation = $request->input('principal_operation');
        $emergency_sixth->other_operation = $request->input('other_operation');
        $emergency_sixth->icpm_code = $request->input('icpm_code');

        $emergency_fifth = new Fifth_emergency();
        $emergency_fifth->ssc = $request->input('ssc');
        $emergency_fifth->alert_allergic = $request->input('alert_allergic');
        $emergency_fifth->hospitalization_plan = $request->input('hospitalization_plan');
        $emergency_fifth->health_insurance = $request->input('health_insurance');
        $emergency_fifth->coverage_insurance = $request->input('coverage_insurance');
        $emergency_fifth->furnished_by = $request->input('furnished_by');
        $emergency_fifth->informant_address = $request->input('informant_address');
        $emergency_fifth->relation_to_patient = $request->input('relation_to_patient');

        $emergency_fourth  = new Fourth_emergency();
        $emergency_fourth->start_date = $request->input('start_date');
        $emergency_fourth->start_time = $request->input('start_time');
        $emergency_fourth->end_date = $request->input('end_date');
        $emergency_fourth->end_time = $request->input('end_time');
        $emergency_fourth->total_days = $request->input('total_days');
        $emergency_fourth->admitting_physician = $request->input('admitting_physician');
        $emergency_fourth->admitting_clerk = $request->input('admitting_clerk');
        $emergency_fourth->admission_type = $request->input('admission_type');
        $emergency_fourth->referred_by = $request->input('referred_by');

        $emergency_third  = new Third_emergency();
        $emergency_third->employer_name = $request->input('employer_name');
        $emergency_third->employer_address = $request->input('employer_address');
        $emergency_third->employer_phone = $request->input('employer_phone');
        $emergency_third->father_name = $request->input('father_name');
        $emergency_third->father_address = $request->input('father_address');
        $emergency_third->father_phone = $request->input('father_phone');
        $emergency_third->mother_maiden_name = $request->input('mother_maiden_name');
        $emergency_third->mother_address = $request->input('mother_address');
        $emergency_third->mother_phone = $request->input('mother_phone');
        $emergency_third->spouse_name = $request->input('spouse_name');
        $emergency_third->spouse_address = $request->input('spouse_address');
        $emergency_third->spouse_phone = $request->input('spouse_phone');

        $emergency_second = new Second_emergency();
        $emergency_second->perma_address = $request->input('perma_address');
        $emergency_second->civil_status = $request->input('civil_status');
        $emergency_second->birthplace = $request->input('birthplace');
        $emergency_second->nationality = $request->input('nationality');
        $emergency_second->religion = $request->input('religion');
        $emergency_second->occupation = $request->input('occupation');

        $emergency_first = new First_emergency();
        $emergency_first->address = $request->input('address');
        $emergency_first->sr_no = $request->input('sr_no');
        $emergency_first->last_name = $request->input('last_name');
        $emergency_first->first_name = $request->input('first_name');
        $emergency_first->middle_name = $request->input('middle_name');
        $emergency_first->type = $request->input('type');
        $emergency_first->ward_room_bed_service = $request->input('ward_room_bed_service');
        $emergency_first->age = Carbon::parse($request->birthday)->age;
        $emergency_first->gender = $request->input('gender');
        $emergency_first->phone = $request->input('phone');
        $emergency_first->birthday = $request->input('birthday');

        $emergency_base = new Patient_id();
        $emergency_base->save();


        $emergency_base->emergency_table()->save($emergency_first);
        $emergency_first->emergency_two()->save($emergency_second);
        $emergency_second->emergency_third()->save($emergency_third);
        $emergency_third->emergency_fourth()->save($emergency_fourth);
        $emergency_fourth->emergency_fifth()->save($emergency_fifth);
        $emergency_fifth->emergency_sixth()->save($emergency_sixth);
        return redirect('/patientPage/emergency');
    }

    public function updateEmergency($id)
    {
        $view_first = First_emergency::find($id);
        $view_second = Second_emergency::find($id);
        $view_third = Third_emergency::find($id);
        $view_fourth = Fourth_emergency::find($id);
        $view_fifth = Fifth_emergency::find($id);
        $view_sixth = Sixth_emergency::find($id);
        return view('user.patientSection.emergency.updateEmergency', [
            'view_first' => $view_first,
            'view_second' => $view_second,
            'view_third' => $view_third,
            'view_fourth' => $view_fourth,
            'view_fifth' => $view_fifth,
            'view_sixth' => $view_sixth,
        ]);
    }

    public function editEmergency(Request $request, $id)
    {
        $edit_first = First_emergency::find($id);
        $edit_second = Second_emergency::find($id);
        $edit_third = Third_emergency::find($id);
        $edit_fourth = Fourth_emergency::find($id);
        $edit_fifth = Fifth_emergency::find($id);
        $edit_sixth = Sixth_emergency::find($id);

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
        return redirect('/patientPage/emergency');
    }
}