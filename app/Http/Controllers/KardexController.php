<?php

namespace App\Http\Controllers;

use App\Models\Kardex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KardexController extends Controller
{
    public function kardexview()
    {
        $kardexDatas = Kardex::query()->paginate(20);
        return view('user.stationSection.kardex_view.kardex', [
            'kardexDatas' => $kardexDatas
        ]);
    }

    public function addKardex()
    {
        return view('user.stationSection.kardex_view.addKardex');
    }

    public function submit_addKardex(Request $request)
    {
        // dd($request->toArray());
        Kardex::create([
            'full_name' => $request->full_name,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'suffix' => $request->suffix,
            'date_of_admission' => $request->date_of_admission,
            'patient_info' => [
                'gender' => $request->gender,
                'age' => $request->age,
                'ward' => $request->ward,
                'diagnosis' => $request->diagnosis,
                'address' => $request->address,
                'attend_physician' => $request->attend_physician,
                'spc_needs' => $request->spc_needs,
                'diet' => $request->diet,
            ],
            'medicine' => [
                'medicineArray' => $request->medicineArray,
            ],
            'lab' => [
                'labArray' => $request->labArray,
            ],
            'iv_fluid' => [
                'iv_fluidArray' => $request->iv_fluidArray,
            ],
        ]);

        return redirect()->route('kardex');
    }

    public function viewKardex($id)
    {
        $kardex = Kardex::find($id);
        return view('user.stationSection.kardex_view.infoKardex', [
            'kardex' => $kardex,
        ]);
    }

    public function updateKardex($id)
    {
        $kardex = Kardex::find($id);
        // dd($nursenotes->toArray());
        return view('user.stationSection.kardex_view.updateKardex', [
            'kardex' => $kardex,
        ]);
    }

    public function editKardex(Request $request, $id)
    {
        // dd($request->toArray());
        try {
            DB::beginTransaction();
            Kardex::where('id', $id)->update([
                'full_name' => $request->full_name,
                'last_name' => $request->last_name,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'suffix' => $request->suffix,
                'date_of_admission' => $request->date_of_admission,
                'patient_info' => [
                    'gender' => $request->gender,
                    'age' => $request->age,
                    'ward' => $request->ward,
                    'diagnosis' => $request->diagnosis,
                    'address' => $request->address,
                    'attend_physician' => $request->attend_physician,
                    'spc_needs' => $request->spc_needs,
                    'diet' => $request->diet,
                ],
                'medicine' => [
                    'medicineArray' => $request->medicineArray,
                ],
                'lab' => [
                    'labArray' => $request->labArray,
                ],
                'iv_fluid' => [
                    'iv_fluidArray' => $request->iv_fluidArray,
                ],
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            return redirect()->back()->withErrors($th);
        }

        return redirect()->route('kardex');
    }
}
