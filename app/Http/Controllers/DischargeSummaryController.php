<?php

namespace App\Http\Controllers;

use App\Models\DischargeSummary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class DischargeSummaryController extends Controller
{
    public function dischargeSummaryview()
    {
        $dischargeSummaryDatas = DischargeSummary::query()->paginate(20);
        return view('user.stationSection.discharge_summary_view.dischargeSummary', [
            'dischargeSummaryDatas' => $dischargeSummaryDatas,
        ]);
    }

    public function addDischargeSummary()
    {
        return view('user.stationSection.discharge_summary_view.addDischargeSummary');
    }

    public function submit_addDischargeSummary(Request $request)
    {
        // dd($request->toArray());
        DischargeSummary::create([
            'discharge_date' => $request->discharge_date,
            'patients_identity' => $request->patients_identity,
            'positive_finding' => $request->positive_finding,
            'treatment' => $request->treatment,
            'course_in_hospital' => $request->course_in_hospital,
            'final_diagnosis' => $request->final_diagnosis,
            'plan' => $request->plan,
            'doctor_name' => $request->doctor_name,
            'license_number' => $request->license_number,
        ]);


        return redirect()->route('dischargeSummary');
    }

    public function viewDischargeSummary($id)
    {
        $dischargeSummary = DischargeSummary::find($id);
        return view('user.stationSection.discharge_summary_view.infoDischargeSummary', [
            'dischargeSummary' => $dischargeSummary,
        ]);
    }

    public function updateDischargeSummary($id)
    {
        $dischargeSummary = DischargeSummary::find($id);
        // dd($nursenotes->toArray());
        return view('user.stationSection.discharge_summary_view.updateDischargeSummary', [
            'dischargeSummary' => $dischargeSummary,
        ]);
    }

    public function editDischargeSummary(Request $request, $id)
    {
        // dd($request->toArray());
        try {
            DB::beginTransaction();
            DischargeSummary::where('id', $id)->update([
                'discharge_date' => $request->discharge_date,
                'patients_identity' => $request->patients_identity,
                'positive_finding' => $request->positive_finding,
                'treatment' => $request->treatment,
                'course_in_hospital' => $request->course_in_hospital,
                'final_diagnosis' => $request->final_diagnosis,
                'plan' => $request->plan,
                'doctor_name' => $request->doctor_name,
                'license_number' => $request->license_number,
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            return redirect()->back()->withErrors($th);
        }

        return redirect()->route('dischargeSummary');
    }

    public function viewpdfDischargeSummary($id)
    {
        $pdf_dischargesummary = DischargeSummary::find($id);
        $pdf_discharge = PDF::loadView('user.stationSection.discharge_summary_view.pdfDischargeSummary', [
            'pdf_dischargesummary' => $pdf_dischargesummary,
        ])->setPaper('a4', 'portrait');

        return $pdf_discharge->stream($pdf_dischargesummary->name . " Discharge Summary" . ".pdf");
    }
}
