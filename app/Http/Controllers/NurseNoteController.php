<?php

namespace App\Http\Controllers;

use App\Actions\Records\NurseNote\StoreNurseNote;
use App\Actions\Records\NurseNote\UpdateNurseNote;
use App\Models\NurseNote;
use App\Models\NurseNoteHistory;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NurseNoteController extends Controller
{
    public function __construct(
        private StoreNurseNote $storeNurseNote,
        private UpdateNurseNote $updateNurseNote,
    ) {
    }

    public function index()
    {
        $nurseNote = NurseNote::all()->paginate(10);
        return view('user.records.nurseNote.index', compact('nurseNote'));
    }

    public function searchNurseNote(Request $request)
    {
        $nurseNote = NurseNote::all();
        if ($request->keyword != '') {
            $nurseNote = NurseNote::where('patient_fullname', 'LIKE', '%' . $request->keyword . '%')->get();
        }
        return response()->json([
            'nurseNote' => $nurseNote
        ]);
    }


    public function create()
    {
        return view('user.records.nurseNote.create');
    }


    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $add = $this->storeNurseNote->handle($request);
            // dd($add);
            DB::commit();
            return redirect()->route('nurseNote.index');
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }


    public function show(NurseNote $nurseNote, NurseNoteHistory $nurseNoteHistory)
    {
        $nurseNoteHistory = NurseNoteHistory::where('history_id', $nurseNote->id)
            ->latest('id')
            ->paginate(12);
        return view('user.recordsHistory.nurseNote.index', compact('nurseNoteHistory', 'nurseNote'));
    }

    public function show_all(NurseNote $nurseNote)
    {
        return view('user.records.nurseNote.show', compact('nurseNote'));
    }


    public function edit(NurseNote $nurseNote)
    {
        return view('user.records.nurseNote.edit', compact('nurseNote'));
    }


    public function update(Request $request, NurseNote $nurseNote)
    {
        try {
            DB::beginTransaction();
            $update = $this->updateNurseNote->handle($request, $nurseNote);
            // dd($update);
            DB::commit();
            return redirect()->route('nurseNote.index');
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }


    public function destroy(NurseNote $nurseNote)
    {
        //
    }

    public function pdf(NurseNote $nurseNote)
    {
        $nurseNote_view = NurseNote::findorfail($nurseNote->id);
        $nurseNote_pdf = PDF::loadView('pdf.nurseNote', compact('nurseNote_view'))
            ->setPaper('a4', 'portrait');

        return $nurseNote_pdf->stream("Nurse Note " . $nurseNote_view->id . ".pdf");
    }
}
