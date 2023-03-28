<?php

namespace App\Http\Controllers;

use App\Actions\Admission\StoreAdmission;
use App\Actions\Admission\UpdateAdmission;
use App\Models\Admission;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdmissionController extends Controller
{

    public function __construct(
        private StoreAdmission $storeAdmission,
        private UpdateAdmission $updateAdmission,
    ) {
    }
    public function index()
    {
        $admissions = Admission::all()->paginate(10);
        return view('user.admission.index', compact('admissions'));
    }

    public function create()
    {
        return view('user.admission.create');
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $admission = $this->storeAdmission->handle($request);
            // dd($admission);
            DB::commit();
            return redirect()->route('admission.index');
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }

    public function show(Admission $admission)
    {
        return view('user.admission.show', compact('admission'));
    }

    public function edit(Admission $admission)
    {
        return view('user.admission.edit', compact('admission'));
    }

    public function update(Request $request, Admission $admission)
    {
        try {
            DB::beginTransaction();
            $update = $this->updateAdmission->handle($request, $admission);
            // dd($update);
            DB::commit();
            return redirect()->route('admission.index');
        } catch (\Throwable $err) {
            DB::rollBack();
            // dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }

    public function destroy(Admission $admission)
    {
        //
    }

    public function pdf(Admission $admission)
    {
        $admission_view = Admission::findorFail($admission->id);
        // dd($emergency_view);
        $admission_pdf = PDF::loadView('pdf.admission', [
            'admission_view' => $admission_view,
        ])->setPaper('a4', 'portrait');

        return $admission_pdf->stream("Emergency Form" . $admission_view->patient_id . ".pdf");
    }
}
