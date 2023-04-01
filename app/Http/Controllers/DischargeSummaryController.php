<?php

namespace App\Http\Controllers;

use App\Actions\Records\DischargeSummary\StoreDischargeSummary;
use App\Actions\Records\DischargeSummary\UpdateDischargeSummary;
use App\Models\DischargeSummary;
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
        $dischargeSummary = DischargeSummary::all()->paginate(10);
        return view('user.records.dischargeSummary.index', compact('dischargeSummary'));
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


    public function show(DischargeSummary $dischargeSummary)
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
}
