<?php

namespace App\Http\Controllers;

use App\Models\DischargeSummaryHistory;
use Illuminate\Http\Request;

class DischargeSummaryHistoryController extends Controller
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

    public function show(DischargeSummaryHistory $dischargeSummaryHistory)
    {
        return view('user.recordsHistory.dischargeSummary.show');
    }

    public function edit(DischargeSummaryHistory $dischargeSummaryHistory)
    {
        //
    }

    public function update(Request $request, DischargeSummaryHistory $dischargeSummaryHistory)
    {
        //
    }

    public function destroy(DischargeSummaryHistory $dischargeSummaryHistory)
    {
        //
    }
}
