<?php

namespace App\Http\Controllers;

use App\Actions\Admissions\StoreAdmission;
use App\Actions\Admissions\UpdateAdmission;
use App\Actions\Patients\StorePatients;
use App\Models\Admissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdmissionsController extends Controller
{

    public function __construct(
        private StorePatients $storePatient,
        private StoreAdmission $storeAdmission,
        private UpdateAdmission $updateAdmission
    ) {
    }


    public function index()
    {
        $admissions = Admissions::query()->with(['patient'])
            ->latest()->paginate(20);
        return view('pages.admissions.index')
            ->with(compact('admissions'));
    }
    public function create()
    {
        return view('pages.admissions.create');
    }
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $patient = $this->storePatient->handle($request);

            $admission = $this->storeAdmission->handle($request, $patient);
            DB::commit();

            return redirect()->route('admissions.index');
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }
    public function show($id)
    {
        //
    }
    public function edit(Admissions $admission)
    {
        return view('pages.admissions.edit')->with(compact('admission'));
    }
    public function update(Request $request, Admissions $admission)
    {
        try {
            DB::beginTransaction();
            $update = $this->updateAdmission->handle($request, $admission);
            // dd($update->wasChanged(), $update->patient->wasChanged(), $update->toArray(), $update->patient->toArray());
            DB::commit();

            return redirect()->route('admissions.index');
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }
    public function destroy($id)
    {
        //
    }
}
