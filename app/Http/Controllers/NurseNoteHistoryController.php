<?php

namespace App\Http\Controllers;

use App\Models\NurseNoteHistory;
use Illuminate\Http\Request;

class NurseNoteHistoryController extends Controller
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

    public function show(NurseNoteHistory $nurseNoteHistory)
    {
        return view('user.recordsHistory.nurseNote.show', compact('nurseNoteHistory'));
    }

    public function edit(NurseNoteHistory $nurseNoteHistory)
    {
        //
    }

    public function update(Request $request, NurseNoteHistory $nurseNoteHistory)
    {
        //
    }

    public function destroy(NurseNoteHistory $nurseNoteHistory)
    {
        //
    }
}
