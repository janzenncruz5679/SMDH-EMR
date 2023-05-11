<?php

namespace App\Http\Controllers;

use App\Models\VitalSignHistory;
use Illuminate\Http\Request;

class VitalSignHistoryController extends Controller
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


    public function show(VitalSignHistory $vitalSignHistory)
    {
        return view('user.recordsHistory.vitalSign.show', compact('vitalSignHistory'));
    }


    public function edit(VitalSignHistory $vitalSignHistory)
    {
        //
    }


    public function update(Request $request, VitalSignHistory $vitalSignHistory)
    {
        //
    }


    public function destroy(VitalSignHistory $vitalSignHistory)
    {
        //
    }
}
