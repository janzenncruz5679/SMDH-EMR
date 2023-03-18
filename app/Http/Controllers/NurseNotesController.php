<?php

namespace App\Http\Controllers;

use App\Actions\NurseNotes\StoreNurseNotes;
use App\Http\Requests\Records\NurseNotes\StoreNurseNotesForm;
use App\Models\NurseNotes;
use App\Models\Patients;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NurseNotesController extends Controller
{
    public function __construct(
        private StoreNurseNotes $storeNurseNotes,
    ) {
    }
    public function index(Patients $patient)
    {
        if (request()->routeIs('patients.nurse-notes.index')) {
            $nurseNotes = NurseNotes::query()
                ->with('patient')
                ->where('patient_id', $patient->id)
                ->paginate(18);

            return view('pages.nurse-notes.index')
                ->with(compact('patient'))
                ->with(compact('nurseNotes'));
        }

        // $nurseNotes = NurseNotes::query()
        //     ->select('*', DB::raw('DATE_FORMAT(created_at, "%M %Y") as created_at_month_year'))
        //     ->with('patient')
        //     ->latest()
        //     ->groupBy([
        //         'id',
        //         'patient_id',
        //         'created_at_month_year'
        //     ])
        //     ->paginate(20);

        $nurseNotes = NurseNotes::query()
            ->join('patients', 'patients.id', '=', 'nurse_notes.patient_id')
            ->select('nurse_notes.*', 'patients.fname', 'patients.lname', 'patients.mname', 'patients.suffix')
            ->groupBy(['nurse_notes.patient_id', 'nurse_notes.ward_room'])
            ->orderBy('patients.fname')
            ->paginate(20);

        return view('pages.nurse-notes.index')
            ->with(compact('nurseNotes'));
    }
    public function create(Patients $patient)
    {
        return view('pages.nurse-notes.create')
            ->with(compact('patient'));
    }
    public function store(Patients $patient, StoreNurseNotesForm $request)
    {
        try {
            DB::beginTransaction();
            $nurseNote = $this->storeNurseNotes->handle($request, $patient);
            // dd($nurseNote->toArray());
            DB::commit();
            return redirect()->route('patients.nurse-notes.index', $patient->id);
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
    public function show(Patients $patient, NurseNotes $nurseNote)
    {
        return view('pages.nurse-notes.show')
            ->with(compact('patient'))
            ->with(compact('nurseNote'));
    }
    public function showAll($nurseNote, $wardRoom)
    {
        $nurseNotes = NurseNotes::query()
            ->select('*', DB::raw('DATE_FORMAT(date_time, "%M %Y") as date_time_month_year'))
            ->with(['patient'])
            ->where('patient_id', $nurseNote)
            ->where('ward_room', $wardRoom)
            ->where('date_time', '>=', Carbon::now()->subDays(365))
            ->latest('date_time')
            ->paginate(2);
        if (sizeof($nurseNotes->items()) < 1) {
            return abort(404);
        }
        return view('pages.nurse-notes.show-all')
            ->with(compact('nurseNotes'));
    }
}
