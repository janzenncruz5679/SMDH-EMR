<?php

namespace App\Http\Controllers;

use App\Actions\Outpatient\StoreOutpatient;
use App\Actions\Outpatient\UpdateOutpatient;
use App\Http\Requests\Records\Outpatient\StoreOutpatientForm;
use App\Models\Outpatient;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OutpatientController extends Controller
{
    public function __construct(
        private StoreOutpatient $storeOutpatient,
        private UpdateOutpatient $updateOutpatient,
    ) {
    }

    public function index()
    {
        $outpatients = Outpatient::all()->paginate(10);
        return view('user.outpatient.index', compact('outpatients'));
    }

    public function create()
    {
        return view('user.outpatient.create');
    }

    public function store(StoreOutpatientForm $request)
    {
        try {
            DB::beginTransaction();
            $outpatient = $this->storeOutpatient->handle($request);
            // dd($outpatient);
            DB::commit();

            return redirect()->route('outpatient.index');
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }

    public function show(Outpatient $outpatient)
    {
        return view('user.outpatient.show', compact('outpatient'));
    }

    public function edit(Outpatient $outpatient)
    {
        return view('user.outpatient.edit', compact('outpatient'));
    }

    public function update(StoreOutpatientForm $request, Outpatient $outpatient)
    {
        try {
            DB::beginTransaction();
            $update = $this->updateOutpatient->handle($request, $outpatient);
            // dd($update);
            DB::commit();
            return redirect()->route('outpatient.index');
        } catch (\Throwable $err) {
            DB::rollBack();
            // dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }

    public function destroy(Outpatient $outpatient)
    {
        //
    }

    public function pdf(Outpatient $outpatient)
    {
        $outpatient_view = Outpatient::findorFail($outpatient->id);
        // dd($outpatient_view);
        $outpatient_pdf = PDF::loadView('pdf.outpatient', [
            'outpatient_view' => $outpatient_view,
        ])->setPaper('a4', 'portrait');

        return $outpatient_pdf->stream("Outpatient Form" . $outpatient_view->patient_id . ".pdf");
    }
}