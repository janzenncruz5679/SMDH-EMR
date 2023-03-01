<?php

namespace App\Http\Controllers;

use App\Models\First_admission;
use App\Models\VitalSigns;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

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
        // dump(VitalSigns::find(2)->date);
        // dd($request->toArray());
        VitalSigns::create([
            'patient_fullname' => $request->patient_fullname,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'physician' => $request->physician,
            'notes' => $request->notes,
            'date' => [
                'dateRecord' => $request->dateRecord,
            ],
            'weight' => [
                'weightRecord' => $request->weightRecord,
            ],
            'temp' => [
                'tempRecord' => $request->tempRecord,
            ],
            'bp' => [
                'bpRecord' => $request->bpRecord,
            ],
            'pulse' => [
                'pulseRecord' => $request->pulseRecord,
            ],
            'respiration' => [
                'respirationRecord' => $request->respirationRecord,
            ],
            'pains' => [
                'painRecord' => $request->painRecord,
            ],
            'initials' => [
                'initialsRecord' => $request->initialsRecord,
            ],
        ]);

        return redirect('/stations/labOptions/vitalSigns');
    }

    public function updateVitals($id)
    {
        $vitals = vitalSigns::find($id);
        // dd($vitals->toArray());
        return view('user.stationSection.vital_sign_view.updateVitals', [
            'vitals' => $vitals,
        ]);
    }

    public function editVitals(Request $request, $id)
    {
        // dd($request->toArray());
        try {
            DB::beginTransaction();
            VitalSigns::where('id', $id)->update([
                'patient_fullname' => $request->patient_fullname,
                'birthdate' => $request->birthdate,
                'gender' => $request->gender,
                'physician' => $request->physician,
                'notes' => $request->notes,
                'date' => [
                    'dateRecord' => $request->dateRecord,
                ],
                'weight' => [
                    'weightRecord' => $request->weightRecord,
                ],
                'temp' => [
                    'tempRecord' => $request->tempRecord,
                ],
                'bp' => [
                    'bpRecord' => $request->bpRecord,
                ],
                'pulse' => [
                    'pulseRecord' => $request->pulseRecord,
                ],
                'respiration' => [
                    'respirationRecord' => $request->respirationRecord,
                ],
                'pains' => [
                    'painRecord' => $request->painRecord,
                ],
                'initials' => [
                    'initialsRecord' => $request->initialsRecord,
                ],
            ]);
            DB::commit();
            return redirect('/records/vitalSigns');
        } catch (\Exception $th) {
            DB::rollBack();
            dd($th);
            return redirect()->back()->withErrors($th);
        }


        return redirect('/records/vitalSigns');
    }

    public function viewpdfVitals($id)
    {
        $pdf_vitals = vitalSigns::find($id);
        $admission_pdf = PDF::loadView('user.stationSection.vital_sign_view.pdfVitals', [
            'pdf_vitals' => $pdf_vitals,
        ])->setPaper('a4', 'portrait');

        return $admission_pdf->stream($pdf_vitals->name . " Vital Sign" . ".pdf");
    }
}
