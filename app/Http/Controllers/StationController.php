<?php

namespace App\Http\Controllers;

use App\Models\First_admission;
use App\Models\VitalSigns;
use Illuminate\Http\Request;

class StationController extends Controller
{
    public function labOptions()
    {
        return view('user.stationSection.labOptions');
    }

    public function vitalSigns()
    {
        $vitalsignsDatas = VitalSigns::query()->paginate(20);

        return view('user.stationSection.vital_sign_view.vitalSigns', [
            'vitalsignsDatas' => $vitalsignsDatas,
        ]);
    }

    public function viewVitalSigns($id)
    {
        $vitals = vitalSigns::find($id);
        return view('user.stationSection.vital_sign_view.infoVitals', [
            'vitals' => $vitals,
        ]);
    }


    public function addVitals()
    {
        return view('user.stationSection.vital_sign_view.addVitals');
    }

    public function submit_addVitals(Request $request)
    {
        VitalSigns::create([
            'patient_fullname' => $request->patient_fullname,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'physician' => $request->physician,
            'notes' => $request->notes,
            'date' => [
                'date_1' => $request->date_1,
                'date_2' => $request->date_2,
            ],
            // 'weight' => $request->weight ? [
            //     'weight_1' => $request->weight_1,
            //     'weight_2' => $request->weight_2,
            // ] : null,
            // 'temp' => $request->temp ? [
            //     'temp_1' => $request->temp_1,
            //     'temp_2' => $request->temp_2,
            // ] : null,
            // 'bp' => $request->bp ? [
            //     'bp_1' => $request->bp_1,
            //     'bp_2' => $request->bp_2,
            // ] : null,
            // 'pulse' => $request->pulse ? [
            //     'pulse_1' => $request->pulse_1,
            //     'pulse_2' => $request->pulse_2,
            // ] : null,
            // 'respiration' => $request->respiration ? [
            //     'respiration_1' => $request->respiration_1,
            //     'respiration_2' => $request->respiration_2,
            // ] : null,
            // 'pains' => $request->pains ? [
            //     'pains_1' => $request->pains_1,
            //     'pains_2' => $request->pains_2,
            // ] : null,
            // 'initials' => $request->date ? [
            //     'initials_1' => $request->initials_1,
            //     'initials_2' => $request->initials_2,
            // ] : null,
        ]);

        return redirect('/stations/labOptions/vitalSigns');
    }

    public function updateVitals($id)
    {
        $vitals = vitalSigns::find($id);
        return view('user.stationSection.vital_sign_view.updateVitals', [
            'vitals' => $vitals,
        ]);
    }

    public function editVitals(Request $request, $id)
    {
        VitalSigns::where('id', $id)->update([
            'patient_fullname' => $request->patient_fullname,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'physician' => $request->physician,
            'notes' => $request->notes,
            'date' => [
                'date_1' => $request->date_1,
                'date_2' => $request->date_2,
            ],
        ]);
        return redirect('/records/vitalSigns');
    }
}
