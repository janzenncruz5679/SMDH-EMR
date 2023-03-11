<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index()
    {
        return view('pages.patients.index');
    }

    public function show(Patients $patient)
    {
        $patient = $patient->load(['admissions', 'nurseNotes']);
        $records = collect([])->merge($patient->admissions);
        $records = $records->merge($patient->nurseNotes)->sortByDesc('created_at');
        dump($records->toArray());
        return view('pages.patients.show')
            ->with(compact('records'))
            ->with(compact('patient'));
    }
}
