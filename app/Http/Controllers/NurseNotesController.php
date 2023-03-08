<?php

namespace App\Http\Controllers;

use App\Actions\NurseNotes\StoreNurseNotes;
use App\Models\NurseNotes;
use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NurseNotesController extends Controller
{
    public function __construct(
        private StoreNurseNotes $storeNurseNotes,
    )
    {
    }
    public function index(Patients $patient)
    {
        $nurseNotes = NurseNotes::query()
            ->with('patient')
            ->where('patient_id', $patient->id)
            ->paginate(20);

        return view('pages.nurse-notes.index')
            ->with(compact('patient'))
            ->with(compact('nurseNotes'));
    }
    public function create(Patients $patient)
    {
        return view('pages.nurse-notes.create')
            ->with(compact('patient'));
    }
    public function store(Patients $patient, Request $request)
    {
        try {
            DB::beginTransaction();
            $nurseNote = $this->storeNurseNotes->handle($request, $patient);
            DB::commit();
            return redirect()->route('patients.nurse-notes.index', $patient->id);

        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
