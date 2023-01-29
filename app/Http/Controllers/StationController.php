<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StationController extends Controller
{
    public function labOptions()
    {
        return view('user.stationSection.labOptions');
    }

    public function vitalSigns()
    {
        return view('user.stationSection.vital_sign_view.vitalSigns');
    }
}