<?php

namespace App\Http\Controllers;

use App\Actions\Billings\StoreBilling;
use App\Models\Admissions;
use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillingsController extends Controller
{
    public function __construct(
        private StoreBilling $storeBilling
    )
    {
    }
    public function index(Patients $patient)
    {
        $billings = Admissions::query()->with('patient')->where('is_billed', false)->latest()->paginate(20);
        return view('pages.billings.index')
            ->with(compact('billings'));
    }
    public function create(Patients $patient)
    {
        return view('pages.billings.create')
            ->with(compact('patient'));
    }
    public function store(Patients $patient, Request $request)
    {
        try {
            DB::beginTransaction();
            // code here
            DB::commit();
            return redirect()->route('patients.billing.show', $patient->id);
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }
    public function show(Patients $patient, $id)
    {
        return view('pages.billing.index')
            ->with(compact('patient'));
    }
    public function destroy(Patients $patient, $id)
    {
        //
    }
}
