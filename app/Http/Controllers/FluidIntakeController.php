<?php

namespace App\Http\Controllers;

use App\Actions\Records\FluidIntake\StoreFluidIntake;
use App\Actions\Records\FluidIntake\UpdateFluidIntake;
use App\Models\FluidIntake;
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
        $fluidIntake = FluidIntake::all()->paginate(10);
        return view('user.records.fluidIntake.index', compact('fluidIntake'));
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


    public function show(FluidIntake $fluidIntake)
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
}
