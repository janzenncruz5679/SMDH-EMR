<?php

namespace App\Http\Controllers;

use App\Models\NurseNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class NurseNoteController extends Controller
{
    public function nurseNotesview()
    {
        $nursenotesDatas = NurseNote::query()->paginate(20);
        return view('user.stationSection.nurse_note_view.nurseNotes', [
            'nursenotesDatas' => $nursenotesDatas,
        ]);
    }

    public function addNurseNotes()
    {
        return view('user.stationSection.nurse_note_view.addNurseNotes');
    }

    public function submit_addNurseNotes(Request $request)
    {
        // dd($request->toArray());
        NurseNote::create([
            'patient_fullname' => $request->patient_fullname,
            'age' => $request->age,
            'ward' => $request->ward,
            'record_date' => [
                'obsDate' => $request->obsDate,
            ],
            'record_time' => [
                'obsTime' => $request->obsTime,
            ],
            'focus' => [
                'obsFocus' => $request->obsFocus,
            ],
            'data_action_response' => [
                'obsDar' => $request->obsDar,
            ],
        ]);

        return redirect()->route('nurseNotes');
    }

    public function viewNurseNotes($id)
    {
        $nursenotes = NurseNote::find($id);
        return view('user.stationSection.nurse_note_view.infoNurseNotes', [
            'nursenotes' => $nursenotes,
        ]);
    }

    public function updateNurseNotes($id)
    {
        $nursenotes = NurseNote::find($id);
        // dd($nursenotes->toArray());
        return view('user.stationSection.nurse_note_view.updateNurseNotes', [
            'nursenotes' => $nursenotes,
        ]);
    }

    public function editNurseNotes(Request $request, $id)
    {
        // dd($request->toArray());
        try {
            DB::beginTransaction();
            NurseNote::where('id', $id)->update([
                'patient_fullname' => $request->patient_fullname,
                'age' => $request->age,
                'ward' => $request->ward,
                'record_date' => [
                    'obsDate' => $request->obsDate,
                ],
                'record_time' => [
                    'obsTime' => $request->obsTime,
                ],
                'focus' => [
                    'obsFocus' => $request->obsFocus,
                ],
                'data_action_response' => [
                    'obsDar' => $request->obsDar,
                ],
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            return redirect()->back()->withErrors($th);
        }

        return redirect()->route('nurseNotes');
    }
    public function viewpdfNurseNotes($id)
    {
        $pdf_nursenotes = NurseNote::find($id);
        $nursenotes_pdf = PDF::loadView('user.stationSection.nurse_note_view.pdfNurseNotes', [
            'pdf_nursenotes' => $pdf_nursenotes,
        ])->setPaper('a4', 'portrait');

        return $nursenotes_pdf->stream($pdf_nursenotes->patient_fullname . " Nurse Notes" . ".pdf");
    }
}
