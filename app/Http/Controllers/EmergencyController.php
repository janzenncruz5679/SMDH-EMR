<?php

namespace App\Http\Controllers;

use App\Actions\Emergency\StoreEmergency;
use App\Actions\Emergency\UpdateEmergency;
use App\Http\Requests\Records\Emergency\StoreEmergencyForm;
use App\Models\Emergency;
use App\Models\EmergencyHistory;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmergencyController extends Controller
{

    public function __construct(
        private StoreEmergency $storeEmergency,
        private UpdateEmergency $updateEmergency,
    ) {
    }

    public function index()
    {
        $emergencies = Emergency::all()->paginate(18);
        return view('user.patients.emergency.index', compact('emergencies'));
    }

    public function searchEmergency(Request $request)
    {
        $emergencies = Emergency::all();
        if ($request->keyword != '') {
            $emergencies = Emergency::where('full_name', 'LIKE', '%' . $request->keyword . '%')->get();
        }
        return response()->json([
            'emergencies' => $emergencies
        ]);
    }


    public function create()
    {
        return view('user.patients.emergency.create');
    }


    public function store(StoreEmergencyForm $request)
    {
        try {
            DB::beginTransaction();
            $emergency = $this->storeEmergency->handle($request);
            // dd($emergency);
            DB::commit();

            return redirect()->route('emergency.index');
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }


    public function show(Emergency $emergency, EmergencyHistory $emergencyHistory)
    {
        $emergencyHistory = EmergencyHistory::where('history_id', $emergency->id)
            ->latest('id')
            ->paginate(7);
        return view('user.patients.patientsHistory.emergency.index', compact('emergencyHistory', 'emergency'));
    }

    public function show_all(Emergency $emergency)
    {
        return view('user.patients.emergency.show', compact('emergency'));
    }

    public function edit(Emergency $emergency)
    {
        return view('user.patients.emergency.edit', compact('emergency'));
    }


    public function update(StoreEmergencyForm $request, Emergency $emergency)
    {
        try {
            DB::beginTransaction();
            $update = $this->updateEmergency->handle($request, $emergency);
            // dd($update);
            DB::commit();
            return redirect()->route('emergency.index');
        } catch (\Throwable $err) {
            DB::rollBack();
            // dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }


    public function destroy(Emergency $emergency)
    {
        //
    }

    public function pdf(Emergency $emergency)
    {
        $emergency_view = Emergency::findorFail($emergency->id);
        // dd($emergency_view);
        $emergency_pdf = PDF::loadView('pdf.emergency', [
            'emergency_view' => $emergency_view,
        ])->setPaper('a4', 'portrait');

        return $emergency_pdf->stream("Emergency Form" . $emergency_view->patient_id . ".pdf");
    }
}
