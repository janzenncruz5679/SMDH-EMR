<?php

namespace App\Http\Controllers;

use App\Models\Admission;
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
        return view('user.patientSection.infoAdmission', [
            'update_data' => $update_data,
        ]);
    }

    //add admission patient
    public function addPatient()
    {
        return view('user.patientSection.addpatient');
    }
}