<?php

namespace App\Http\Controllers;

use App\Actions\Records\DischargeSummary\StoreDischargeSummary;
use App\Actions\Records\DischargeSummary\UpdateDischargeSummary;
use App\Models\DischargeSummary;
use App\Models\DischargeSummaryHistory;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DischargeSummaryController extends Controller
{

    public function __construct(
        private StoreDischargeSummary $storeDischargeSummary,
        private UpdateDischargeSummary $updateDischargeSummary,
    ) {
    }

    public function index()
    {
        $dischargeSummary = DischargeSummary::all()->paginate(18);
        return view('user.records.dischargeSummary.index', compact('dischargeSummary'));
    }

    public function searchDischargeSummary(Request $request)
    {
        $dischargeSummary = DischargeSummary::all();
        if ($request->keyword != '') {
            $dischargeSummary = DischargeSummary::where('patients_identity', 'LIKE', '%' . $request->keyword . '%')->get();
        }
        return response()->json([
            'dischargeSummary' => $dischargeSummary
        ]);
    }


    public function create()
    {
        return view('user.records.dischargeSummary.create');
    }


    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $add = $this->storeDischargeSummary->handle($request);
            // dd($add);
            DB::commit();
            return redirect()->route('dischargeSummary.index');
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }


    public function show(DischargeSummary $dischargeSummary, DischargeSummaryHistory $dischargeSummaryHistory)
    {
        $dischargeSummaryHistory = DischargeSummaryHistory::where('history_id', $dischargeSummary->id)
            ->latest('id')
            ->paginate(12);
        // dd($dischargeSummaryHistory->toArray());
        return view('user.recordsHistory.dischargeSummary.index', compact('dischargeSummaryHistory', 'dischargeSummary'));
    }

    public function show_all(DischargeSummary $dischargeSummary)
    {
        return view('user.records.dischargeSummary.show', compact('dischargeSummary'));
    }


    public function edit(DischargeSummary $dischargeSummary)
    {
        return view('user.records.dischargeSummary.edit', compact('dischargeSummary'));
    }


    public function update(Request $request, DischargeSummary $dischargeSummary)
    {
        try {
            DB::beginTransaction();
            $update = $this->updateDischargeSummary->handle($request, $dischargeSummary);
            // dd($update);
            DB::commit();
            return redirect()->route('dischargeSummary.index');
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }


    public function destroy(DischargeSummary $dischargeSummary)
    {
        //
    }

    public function pdf(DischargeSummary $dischargeSummary)
    {
        $dischargeSummary_view = DischargeSummary::findorfail($dischargeSummary->id);
        $dischargeSummary_pdf = PDF::loadView('pdf.dischargeSummary', compact('dischargeSummary_view'))
            ->setPaper('a4', 'portrait');

        return $dischargeSummary_pdf->stream("Dsicharge Summary " . $dischargeSummary_view->id . ".pdf");
    }
}
