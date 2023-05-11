<?php

namespace App\Http\Controllers;

use App\Models\OutpatientHistory;
use Illuminate\Http\Request;

class OutpatientHistoryController extends Controller
{
    public function show(OutpatientHistory $outpatientHistory)
    {
        return view('user.patients.patientsHistory.outpatient.show', compact('outpatientHistory'));
    }
}
