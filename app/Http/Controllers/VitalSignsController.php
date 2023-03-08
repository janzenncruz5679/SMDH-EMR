<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;

class VitalSignsController extends Controller
{
    public function index(Patients $patient)
    {
        return view('pages.vital-signs.index')
            ->with(compact('patient'));
    }
    public function create(Patients $patient)
    {
        return view('pages.vital-signs.create')
            ->with(compact('patient'));
    }
    public function store(Patients $patient, Request $request)
    {
        //
    }
    public function show(Patients $patient, $id)
    {
        return view('pages.vital-signs.show')
            ->with(compact('patient'));
    }
    public function destroy(Patients $patient, $id)
    {
        //
    }
}
