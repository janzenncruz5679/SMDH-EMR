<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\First_admission;
use App\Models\Second_admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class PatientController extends Controller
{
    public function admission()
    {
        $patientDatas = Admission::all();

        $patientDatas = collect($patientDatas)->paginate(15);
        return view('user.patientSection.admission', ['patientDatas' => $patientDatas,]);
    }
    public function admissionSearch(Request $request)
    {
        if (isset($_GET['query'])) {
            $search_admission = $_GET['query'] ?? "";
            $patientDatas = DB::table('admissions')
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

    public function updateAdmission($id)
    {
        $update_data = Admission::find($id);
        $update_first = First_admission::find($id);
        $update_second = Second_admission::find($id);
        return view('user.patientSection.infoAdmission', [
            'update_data' => $update_data,
            'update_first' => $update_first,
            'update_second' => $update_second,
        ]);
    }

    //view admission patient form
    public function addPatient()
    {
        return view('user.patientSection.addpatient');
    }
    //add admission form patient
    public function submit_admit_patient(Request $request)
    {
        // $admission_displays = new Admission();
        // $admission_displays->first_name = $request->input('first_name');
        // $admission_displays->middle_name = $request->input('middle_name');
        // $admission_displays->last_name = $request->input('last_name');
        // $admission_displays->age = $request->input('age');
        // $admission_displays->gender = $request->input('sex');
        // $admission_displays->address = $request->input('address');
        // $admission_displays->save();

        // $admission_first = new First_admission();
        // $admission_first->sr_no = $request->input('sr_no');
        // $admission_first->save();

        $admission_second = new Second_admission();
        $admission_second->employer_name = $request->input('employer_name');

        $admission_first = new First_admission();
        $admission_first->sr_no = $request->input('sr_no');

        $admission_displays = new Admission();
        $admission_displays->first_name = $request->input('first_name');
        $admission_displays->middle_name = $request->input('middle_name');
        $admission_displays->last_name = $request->input('last_name');
        $admission_displays->age = $request->input('age');
        $admission_displays->gender = $request->input('sex');
        $admission_displays->address = $request->input('address');
        $admission_displays->save();

        $admission_displays->admission_one()->save($admission_first);
        $admission_first->admission_two()->save($admission_second);




        return redirect('/patientPage/admission');
    }
}