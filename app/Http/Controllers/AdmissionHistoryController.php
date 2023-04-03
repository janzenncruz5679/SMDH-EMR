<?php

namespace App\Http\Controllers;

use App\Models\AdmissionHistory;
use Illuminate\Http\Request;

class AdmissionHistoryController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(AdmissionHistory $admissionHistory)
    {
        return view('user.patients.patientsHistory.admission.show', compact('admissionHistory'));
    }

    public function edit(AdmissionHistory $admissionHistory)
    {
        //
    }

    public function update(Request $request, AdmissionHistory $admissionHistory)
    {
        //
    }

    public function destroy(AdmissionHistory $admissionHistory)
    {
        //
    }
}