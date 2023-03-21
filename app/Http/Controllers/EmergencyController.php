<?php

namespace App\Http\Controllers;

use App\Actions\Emergency\StoreEmergency;
use App\Actions\Emergency\UpdateEmergency;
use App\Models\Emergency;
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
        $emergencies = Emergency::all()->paginate(10);
        return view('user.emergency.index', compact('emergencies'));
    }


    public function create()
    {
        return view('user.emergency.create');
    }


    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $emergency = $this->storeEmergency->handle($request);
            // dd($emergency);
            DB::commit();

            return redirect()->route('emergency.index');
        } catch (\Exception $err) {
            DB::rollBack();
            // dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }


    public function show(Emergency $emergency)
    {
        return view('user.emergency.show', compact('emergency'));
    }


    public function edit(Emergency $emergency)
    {
        return view('user.emergency.edit', compact('emergency'));
    }


    public function update(Request $request, Emergency $emergency)
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
}