<?php

namespace App\Http\Controllers;

use App\Actions\Records\VitalSign\StoreVital;
use App\Actions\Records\VitalSign\UpdateVital;
use App\Models\Admission;
use App\Models\VitalSign;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VitalSignController extends Controller
{

    public function __construct(
        private StoreVital $storeVital,
        private UpdateVital $updateVital,
    ) {
    }

    public function index()
    {
        $vitalSign = VitalSign::all()->paginate(10);
        return view('user.records.vitalSign.index', compact('vitalSign'));
    }

    public function searchVitalSign(Request $request)
    {
        $vitalSign = VitalSign::all();
        if ($request->keyword != '') {
            $vitalSign = VitalSign::where('patient_fullname', 'LIKE', '%' . $request->keyword . '%')->get();
        }
        return response()->json([
            'vitalSign' => $vitalSign
        ]);
    }

    public function create(Admission $admission)
    {
        return view('user.records.vitalSign.create')
            ->with(compact('admission'));
    }


    public function store(Admission $admission, Request $request)
    {
        try {
            DB::beginTransaction();
            $add = $this->storeVital->handle($admission, $request);
            // dd($add);
            DB::commit();
            return redirect()->route('vitalSign.index', $admission->id);
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }


    public function show(VitalSign $vitalSign)
    {
        return view('user.records.vitalSign.show', compact('vitalSign'));
    }


    public function edit(VitalSign $vitalSign)
    {
        return view('user.records.vitalSign.edit', compact('vitalSign'));
    }


    public function update(Request $request, VitalSign $vitalSign)
    {
        try {
            DB::beginTransaction();
            $update = $this->updateVital->handle($request, $vitalSign);
            DB::commit();
            return redirect()->route('vitalSign.index');
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }

    public function destroy(VitalSign $vitalSign)
    {
        //
    }

    public function pdf(VitalSign $vitalSign)
    {
        $vitalSign_view = VitalSign::findorfail($vitalSign->id);
        $vitalSign_pdf = PDF::loadView('pdf.vitalSign', compact('vitalSign_view'))
            ->setPaper('a4', 'portrait');

        return $vitalSign_pdf->stream("Vital Signs  " . $vitalSign_view->id . ".pdf");
    }
}