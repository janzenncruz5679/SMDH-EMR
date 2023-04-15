<?php

namespace App\Http\Controllers;

use App\Models\FluidIntakeHistory;
use Illuminate\Http\Request;

class FluidIntakeHistoryController extends Controller
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


    public function show(FluidIntakeHistory $fluidIntakeHistory)
    {
        return view('user.recordsHistory.fluidIntake.show', compact('fluidIntakeHistory'));
    }


    public function edit(FluidIntakeHistory $fluidIntakeHistory)
    {
        //
    }


    public function update(Request $request, FluidIntakeHistory $fluidIntakeHistory)
    {
        //
    }


    public function destroy(FluidIntakeHistory $fluidIntakeHistory)
    {
        //
    }
}
