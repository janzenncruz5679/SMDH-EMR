<?php

namespace App\Http\Controllers;

use App\Actions\Records\FluidIntake\StoreFluidIntake;
use App\Actions\Records\FluidIntake\UpdateFluidIntake;
use App\Models\FluidIntake;
use App\Models\FluidIntakeHistory;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FluidIntakeController extends Controller
{
    public function __construct(
        private StoreFluidIntake $storeFluidIntake,
        private UpdateFluidIntake $updateFluidIntake,
    ) {
    }

    public function index()
    {
        $fluidIntake = FluidIntake::all()->paginate(18);
        return view('user.records.fluidIntake.index', compact('fluidIntake'));
    }

    public function searchFluidIntake(Request $request)
    {
        $fluidIntake = FluidIntake::all();
        if ($request->keyword != '') {
            $fluidIntake = FluidIntake::where('full_name', 'LIKE', '%' . $request->keyword . '%')->get();
        }
        return response()->json([
            'fluidIntake' => $fluidIntake
        ]);
    }


    public function create()
    {
        return view('user.records.fluidIntake.create');
    }


    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $add = $this->storeFluidIntake->handle($request);
            // dd($add);
            DB::commit();
            return redirect()->route('fluidIntake.index');
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }


    public function show(FluidIntake $fluidIntake, FluidIntakeHistory $fluidIntakeHistory)
    {
        $fluidIntakeHistory = FluidIntakeHistory::where('history_id', $fluidIntake->id)
            ->latest('id')
            ->paginate(12);
        return view('user.recordsHistory.fluidIntake.index', compact('fluidIntakeHistory', 'fluidIntake'));
    }

    public function show_all(FluidIntake $fluidIntake)
    {
        return view('user.records.fluidIntake.show', compact('fluidIntake'));
    }


    public function edit(FluidIntake $fluidIntake)
    {
        return view('user.records.fluidIntake.edit', compact('fluidIntake'));
    }


    public function update(Request $request, FluidIntake $fluidIntake)
    {
        try {
            DB::beginTransaction();
            $update = $this->updateFluidIntake->handle($request, $fluidIntake);
            // dd($update);
            DB::commit();
            return redirect()->route('fluidIntake.index');
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }

    public function destroy(FluidIntake $fluidIntake)
    {
        //
    }

    public function pdf(FluidIntake $fluidIntake)
    {
        $fluidIntake_view = FluidIntake::findorfail($fluidIntake->id);
        $fluidIntake_pdf = PDF::loadView('pdf.fluidIntake', compact('fluidIntake_view'))
            ->setPaper('a4', 'portrait');

        return $fluidIntake_pdf->stream("Fluid Intake " . $fluidIntake_view->id . ".pdf");
    }
}
