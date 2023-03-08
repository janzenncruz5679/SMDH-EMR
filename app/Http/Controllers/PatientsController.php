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
        return view('pages.patients.show')
            ->with(compact('patient'));
    }
}
