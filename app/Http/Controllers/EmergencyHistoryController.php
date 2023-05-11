<?php

namespace App\Http\Controllers;

use App\Models\EmergencyHistory;
use Illuminate\Http\Request;

class EmergencyHistoryController extends Controller
{
    public function show(EmergencyHistory $emergencyHistory)
    {
        return view('user.patients.patientsHistory.emergency.show', compact('emergencyHistory'));
    }
}
