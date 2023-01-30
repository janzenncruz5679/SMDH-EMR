<?php

namespace App\Http\Controllers;

use App\Models\Fifth_outpatient;
use App\Models\First_outpatient;
use App\Models\Fourth_outpatient;
use App\Models\Patient_id;
use App\Models\Second_outpatient;
use App\Models\Sixth_outpatient;
use App\Models\Third_outpatient;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OutpatientController extends Controller
{
    public function outpatient()
    {
        $patientDatas = First_outpatient::select('id', 'patient_id', 'first_name', 'middle_name', 'last_name', 'age', 'gender', 'phone')
            ->where('type', '=', 'Outpatient')
            ->paginate(18);

        $patientIds = Patient_id::select('id')->paginate(18);



        // $patientDatas = collect($patientDatas)->paginate(15);
        return view('user.patientSection.outpatient.outpatient_view', [
            'patientDatas' => $patientDatas,
            'patientIds' => $patientIds,
        ]);
    }

    public function addOutpatient()
    {
        return view('user.patientSection.outpatient.addoutpatient');
    }

    public function viewOutpatient($id)
    {

        $view_first = First_outpatient::find($id);
        $view_second = Second_outpatient::find($id);
        $view_third = Third_outpatient::find($id);
        $view_fourth = Fourth_outpatient::find($id);
        $view_fifth = Fifth_outpatient::find($id);
        $view_sixth = Sixth_outpatient::find($id);
        return view('user.patientSection.outpatient.infoOutpatient', [
            'view_first' => $view_first,
            'view_second' => $view_second,
            'view_third' => $view_third,
            'view_fourth' => $view_fourth,
            'view_fifth' => $view_fifth,
            'view_sixth' => $view_sixth,
        ]);
    }

    public function outpatientSearch(Request $request)
    {

        if ($request->search) {
            $searchTerms = explode(' ', $request->search);
            $patientDatas = First_outpatient::where('type', '=', 'Outpatient')
                ->where(function ($q) use ($searchTerms) {
                    foreach ($searchTerms as $term) {
                        $q->orWhere('full_name', 'LIKE', '%' . $term . '%');
                    }
                })
                ->paginate(18);
            return view('user.patientSection.outpatient.outpatient_view_search', [
                'patientDatas' => $patientDatas,
            ]);
        } else {
            return view('user.patientSection.outpatient.outpatient_view_search');
        }
    }

    public function submit_emergency_patient(Request $request)
    {

        $request->validate([
            //first outpatient
            'address' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'ward_room_bed_service' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'birthday' => 'required',

            //second_outpatient
            'perma_address' => 'required',
            'civil_status' => 'required',
            'birthplace' => 'required',
            'nationality' => 'required',
            'religion' => 'required',

            //fourth_outpatient
            'start_date' => 'required',
            'start_time' => 'required',
            'end_date' => 'required',
            'end_time' => 'required',
            'admitting_physician' => 'required',
            'admitting_clerk' => 'required',
            'admission_type' => 'required',
            'referred_by' => 'required',

            //fifth_outpatient
            'ssc' => 'required',
            'alert_allergic' => 'required',
            'health_insurance' => 'required',
            'coverage_insurance' => 'required',
            'furnished_by' => 'required',
            'informant_address' => 'required',
            'relation_to_patient' => 'required',

            //sixth_outpatient
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

        $outpatient_sixth = new Sixth_outpatient();
        $outpatient_sixth->admission_diagnosis = $request->input('admission_diagnosis');
        $outpatient_sixth->principal_diagnosis = $request->input('principal_diagnosis');
        $outpatient_sixth->other_diagnosis = $request->input('other_diagnosis');
        $outpatient_sixth->idc_code = $request->input('idc_code');
        $outpatient_sixth->principal_operation = $request->input('principal_operation');
        $outpatient_sixth->other_operation = $request->input('other_operation');
        $outpatient_sixth->icpm_code = $request->input('icpm_code');

        $outpatient_fifth = new Fifth_outpatient();
        $outpatient_fifth->ssc = $request->input('ssc');
        $outpatient_fifth->alert_allergic = $request->input('alert_allergic');
        $outpatient_fifth->hospitalization_plan = $request->input('hospitalization_plan');
        $outpatient_fifth->health_insurance = $request->input('health_insurance');
        $outpatient_fifth->coverage_insurance = $request->input('coverage_insurance');
        $outpatient_fifth->furnished_by = $request->input('furnished_by');
        $outpatient_fifth->informant_address = $request->input('informant_address');
        $outpatient_fifth->relation_to_patient = $request->input('relation_to_patient');

        $outpatient_fourth  = new Fourth_outpatient();
        $outpatient_fourth->start_date = $request->input('start_date');
        $outpatient_fourth->start_time = $request->input('start_time');
        $outpatient_fourth->end_date = $request->input('end_date');
        $outpatient_fourth->end_time = $request->input('end_time');
        $outpatient_fourth->total_days = $request->input('total_days');
        $outpatient_fourth->admitting_physician = $request->input('admitting_physician');
        $outpatient_fourth->admitting_clerk = $request->input('admitting_clerk');
        $outpatient_fourth->admission_type = $request->input('admission_type');
        $outpatient_fourth->referred_by = $request->input('referred_by');

        $outpatient_third  = new Third_outpatient();
        $outpatient_third->employer_name = $request->input('employer_name');
        $outpatient_third->employer_address = $request->input('employer_address');
        $outpatient_third->employer_phone = $request->input('employer_phone');
        $outpatient_third->father_name = $request->input('father_name');
        $outpatient_third->father_address = $request->input('father_address');
        $outpatient_third->father_phone = $request->input('father_phone');
        $outpatient_third->mother_maiden_name = $request->input('mother_maiden_name');
        $outpatient_third->mother_address = $request->input('mother_address');
        $outpatient_third->mother_phone = $request->input('mother_phone');
        $outpatient_third->spouse_name = $request->input('spouse_name');
        $outpatient_third->spouse_address = $request->input('spouse_address');
        $outpatient_third->spouse_phone = $request->input('spouse_phone');

        $outpatient_second = new Second_outpatient();
        $outpatient_second->perma_address = $request->input('perma_address');
        $outpatient_second->civil_status = $request->input('civil_status');
        $outpatient_second->birthplace = $request->input('birthplace');
        $outpatient_second->nationality = $request->input('nationality');
        $outpatient_second->religion = $request->input('religion');
        $outpatient_second->occupation = $request->input('occupation');

        $outpatient_first = new First_outpatient();
        $outpatient_first->address = $request->input('address');
        $outpatient_first->sr_no = $request->input('sr_no');
        $outpatient_first->last_name = $request->input('last_name');
        $outpatient_first->first_name = $request->input('first_name');
        $outpatient_first->middle_name = $request->input('middle_name');
        $outpatient_first->type = $request->input('type');
        $outpatient_first->ward_room_bed_service = $request->input('ward_room_bed_service');
        $outpatient_first->age = Carbon::parse($request->birthday)->age;
        $outpatient_first->gender = $request->input('gender');
        $outpatient_first->phone = $request->input('phone');
        $outpatient_first->birthday = $request->input('birthday');

        $outpatient_base = new Patient_id();
        $outpatient_base->save();


        $outpatient_base->outpatient_table()->save($outpatient_first);
        $outpatient_first->outpatient_two()->save($outpatient_second);
        $outpatient_second->outpatient_third()->save($outpatient_third);
        $outpatient_third->outpatient_fourth()->save($outpatient_fourth);
        $outpatient_fourth->outpatient_fifth()->save($outpatient_fifth);
        $outpatient_fifth->outpatient_sixth()->save($outpatient_sixth);
        return redirect('/patientPage/outpatient');
    }

    public function updateOutpatient($id)
    {
        $view_first = First_outpatient::find($id);
        $view_second = Second_outpatient::find($id);
        $view_third = Third_outpatient::find($id);
        $view_fourth = Fourth_outpatient::find($id);
        $view_fifth = Fifth_outpatient::find($id);
        $view_sixth = Sixth_outpatient::find($id);
        return view('user.patientSection.outpatient.updateOutpatient', [
            'view_first' => $view_first,
            'view_second' => $view_second,
            'view_third' => $view_third,
            'view_fourth' => $view_fourth,
            'view_fifth' => $view_fifth,
            'view_sixth' => $view_sixth,
        ]);
    }

    public function editOutpatient(Request $request, $id)
    {
        $edit_first = First_outpatient::find($id);
        $edit_second = Second_outpatient::find($id);
        $edit_third = Third_outpatient::find($id);
        $edit_fourth = Fourth_outpatient::find($id);
        $edit_fifth = Fifth_outpatient::find($id);
        $edit_sixth = Sixth_outpatient::find($id);

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
        return redirect('/patientPage/outpatient');
    }
}