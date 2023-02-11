<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admissions as FormRequest;
use App\Actions\Admissions as Actions;
use App\Models\Admissions;
use App\Models\First_admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdmissionsController
{
    public function __construct(
        private Actions\Store $storeAdmission,
    )
    {

    }

    public function index()
    {
        // $patientDatas = First_admission::select('id', 'patient_id', 'first_name', 'middle_name', 'last_name', 'age', 'gender', 'phone')->paginate(18);
        dump(Admissions::query()->with('patient')->get()->toArray());
        $patientDatas = Admissions::query()->with('patient')->paginate(20);
        // $patientDatas = collect($patientDatas)->paginate(15);

        return view('test.index', [
            'patientDatas' => $patientDatas,
        ]);
    }
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $this->storeAdmission->execute($request);
            DB::commit();
            dump('hit');
            return redirect()->route('test-patient.index');
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors([
                'error' => 'there are asdawd'
            ]);
        }
    }

    public function create()
    {
        return view('test.create');
    }

    public function show(Request $request, Admissions $test_patient)
    {
        $admission = $test_patient;
        return view('test.show')
            ->with(compact('admission'));
    }
}
