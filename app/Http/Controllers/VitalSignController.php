<?php

namespace App\Http\Controllers;

use App\Actions\Records\VitalSign\StoreVital;
use App\Actions\Records\VitalSign\UpdateVital;
use App\Models\VitalSign;
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

    public function create()
    {
        return view('user.records.vitalSign.create');
    }


    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $add = $this->storeVital->handle($request);
            // dd($add);
            DB::commit();
            return redirect()->route('vitalSign.index');
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
}