<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillingController extends Controller
{
    public function index(Patients $patient)
    {
        return view('pages.billing.index')
            ->with(compact('patient'));
    }
    public function create(Patients $patient)
    {
        return view('pages.billing.create')
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
