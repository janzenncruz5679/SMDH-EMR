<?php

namespace App\Http\Controllers;

use App\Models\AdmissionHistory;
use Illuminate\Http\Request;

class AdmissionHistoryController extends Controller
{

    public function show(AdmissionHistory $admissionHistory)
    {
        return view('user.patients.patientsHistory.admission.show', compact('admissionHistory'));
    }
}
