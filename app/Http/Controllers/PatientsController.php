<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index()
    {
        return view('pages.patients.index');
    }
}
