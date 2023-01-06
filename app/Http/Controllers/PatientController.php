<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\First_admission;
use App\Models\Second_admission;
use App\Models\Third_admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use Carbon\Carbon;

class PatientController extends Controller
{
    public function admission()
    {
        $patientDatas = First_admission::select('id', 'first_name', 'middle_name', 'last_name', 'age', 'gender', 'phone')->paginate(15);


        // $patientDatas = collect($patientDatas)->paginate(15);
        return view('user.patientSection.admission', ['patientDatas' => $patientDatas,]);
    }
    public function admissionSearch(Request $request)
    {
        if (isset($_GET['query'])) {
            $search_admission = $_GET['query'] ?? "";
            $patientDatas = DB::table('first_admissions')
                ->where('first_name', 'LIKE', '%' . $search_admission . '%')
                ->orwhere('last_name', 'LIKE', '%' . $search_admission . '%')
                ->orwhere('middle_name', 'LIKE', '%' . $search_admission . '%')
                ->paginate(15);
            $patientDatas->appends($request->all());
            return view('user.patientSection.admission_search', [
                'patientDatas' => $patientDatas,
                'search_admission' => $search_admission
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
        return view('user.patientSection.infoAdmission', [
            'view_first' => $view_first,
            'view_second' => $view_second,
            'view_third' => $view_third,
        ]);
    }

    //get add admission patient form
    public function addPatient()
    {
        return view('user.patientSection.addpatient');
    }
    //post add admission form patient
    public function submit_admit_patient(Request $request)
    {
        // dump(Carbon::createFromFormat('Y-m-d', $request->birtday));
        // dump(Carbon::parse($request->birthday)->age);
        // dump(($request->birthday));
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

        $admission_third  = new Third_admission();
        $admission_third->employer_name = $request->input('employer_name');
        $admission_third->employer_address = $request->input('employer_address');
        $admission_third->employer_phone = $request->input('employer_phone');
        $admission_third->father_name = $request->input('father_name');
        $admission_third->father_address = $request->input('father_address');
        $admission_third->father_phone = $request->input('father_phone');
        $admission_third->mother_maiden_name = $request->input('mother_maiden_name');
        $admission_third->mother_address = $request->input('mother_address');
        $admission_third->mother_phone = $request->input('mother_phone');
        $admission_third->spouse_name = $request->input('spouse_name');
        $admission_third->spouse_address = $request->input('spouse_address');
        $admission_third->spouse_phone = $request->input('spouse_phone');



        $admission_second = new Second_admission();
        $admission_second->perma_address = $request->input('perma_address');
        $admission_second->civil_status = $request->input('civil_status');
        $admission_second->birthplace = $request->input('birthplace');
        $admission_second->nationality = $request->input('nationality');
        $admission_second->religion = $request->input('religion');
        $admission_second->occupation = $request->input('occupation');

        $admission_first = new First_admission();
        $admission_first->address = $request->input('address');
        $admission_first->sr_no = $request->input('sr_no');
        $admission_first->last_name = $request->input('last_name');
        $admission_first->first_name = $request->input('first_name');
        $admission_first->middle_name = $request->input('middle_name');
        $admission_first->ward_room_bed_service = $request->input('ward_room_bed_service');
        $admission_first->age = Carbon::parse($request->birthday)->age;
        $admission_first->gender = $request->input('gender');
        $admission_first->phone = $request->input('phone');
        $admission_first->birthday = $request->input('birthday');
        $admission_first->save();

        $admission_first->admission_two()->save($admission_second);
        $admission_second->admission_third()->save($admission_third);
        return redirect('/patientPage/admission');
    }

    //update admission patient form
    public function updateAdmission($id)
    {
        $view_first = First_admission::find($id);
        // $view_second = Second_admission::find($id);
        // $view_third = Third_admission::find($id);
        return view('user.patientSection.updatepatient', [
            'view_first' => $view_first,
            // 'view_second' => $view_second,
            // 'view_third' => $view_third,
        ]);
    }

    public function editAdmission(Request $request, $id)
    {
        $edit_first = First_admission::find($id);
        // $edit_second = Second_admission::find($id);
        // $edit_third = Third_admission::find($id);


        // $edit_second->perma_address = $request->input('perma_address');
        // $edit_second->save();


        $edit_first->address = $request->address;
        $edit_first->save();
        return redirect('/patientPage/admission');
    }
}