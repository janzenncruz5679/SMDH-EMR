<?php

namespace App\Http\Controllers;

use App\Actions\VitalSigns\StoreVitalSigns;
use App\Models\Patients;
use App\Models\VitalSigns;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VitalSignsController extends Controller
{
    public function __construct(
        private StoreVitalSigns $storeVitalSigns,
    )
    {
    }
    public function index(Patients $patient)
    {
        if (request()->routeIs('patients.vital-signs.index')) {
            return view('pages.vital-signs.index')
                ->with(compact('patient'));
        }
        // $vitaSigns = VitalSigns;
        return view('pages.vital-signs.index');
    }
    public function create(Patients $patient)
    {
        return view('pages.vital-signs.create')
            ->with(compact('patient'));
    }
    public function store(Patients $patient, Request $request)
    {
        try {
            DB::beginTransaction();
            $vitalSign = $this->storeVitalSigns->handle($patient, $request);
            DB::commit();
            return redirect()->route('patients.vital-signs.show', [$patient->id, $vitalSign->physician]);
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }
    public function show(Patients $patient, VitalSigns $vitalSign, $physician)
    {
        $vitalSign = VitalSigns::query()
            ->where('patient_id', $patient->id)
            ->where('physician', $physician)
            ->latest()
            ->get();

        if (count($vitalSign) < 1) {
            abort(404);
        }
        // dump($vitalSign, $vitalSign->first()->date, count($vitalSign));
        $dates
            = $weights
            = $temperatures
            = $blood_pressures
            = $pulses
            = $respirations
            = $pains
            = $initials
            = [];
        $dataRows = collect();
        foreach ($vitalSign as $vital) {
            foreach (range(0, count($vital->date) - 1) as $k) {
                $dataRows->push([
                    'date' => Carbon::parse($vital->date[$k])->toDateString(),
                    'weight' => $vital->weight[$k],
                    'temperature' => $vital->temperature[$k],
                    'blood_pressure' => $vital->blood_pressure[$k],
                    'pulse' => $vital->pulse[$k],
                    'respiration' => $vital->respiration[$k],
                    'pain' => $vital->pain[$k],
                    'initials' => $vital->initials[$k],
                ]);
            }
        }
        $dataRows = $dataRows->sortByDesc('date');
        return view('pages.vital-signs.show')
            ->with(compact('patient'))
            ->with(compact('dataRows'))
            ->with(compact('vitalSign'));
    }
    public function showPhysicians(Patients $patient)
    {
        $physicians = VitalSigns::query()
            ->where('patient_id', $patient->id)
            ->latest()
            ->paginate(20);

        return view('pages.vital-signs.show-physician')
            ->with(compact('patient'))
            ->with(compact('physicians'));
    }
    public function showAll(Patients $patient)
    {
        //
    }
}
