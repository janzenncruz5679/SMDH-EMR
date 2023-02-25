<?php

namespace App\Http\Controllers;

use App\Models\PhysicianOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhysicianOrderController extends Controller
{
    public function physicianOrderview()
    {
        $physicianorderDatas = PhysicianOrder::query()->paginate(20);
        return view('user.stationSection.physician_order_view.physicianOrder', [
            'physicianorderDatas' => $physicianorderDatas
        ]);
    }

    public function addPhysicianOrder()
    {
        return view('user.stationSection.physician_order_view.addPhysicianOrder');
    }

    public function submit_addPhysicianOrder(Request $request)
    {
        // dd($request->toArray());
        PhysicianOrder::create([
            'full_name' => $request->full_name,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'suffix' => $request->suffix,
            'resident_physician' => $request->resident_physician,
            'entry_date' => [
                'entrydateArray' => $request->entrydateArray,
            ],
            'entry_time' => [
                'entrytimeArray' => $request->entrytimeArray,
            ],
            'progress_notes' => [
                'progressnotesArray' => $request->progressnotesArray,
            ],
            'doctor_order' => [
                'doctororderArray' =>  $request->doctororderArray,
            ],
        ]);

        return redirect()->route('physicianOrder');
    }

    public function viewPhysicianOrder($id)
    {
        $physicianorder = PhysicianOrder::find($id);
        return view('user.stationSection.physician_order_view.infoPhysicianOrder', [
            'physicianorder' => $physicianorder,
        ]);
    }

    public function updatePhysicianOrder($id)
    {
        $physicianorder = PhysicianOrder::find($id);
        // dd($nursenotes->toArray());
        return view('user.stationSection.physician_order_view.updatePhysicianOrder', [
            'physicianorder' => $physicianorder,
        ]);
    }

    public function editPhysicianOrder(Request $request, $id)
    {
        // dd($request->toArray());
        try {
            DB::beginTransaction();
            PhysicianOrder::where('id', $id)->update([
                'full_name' => $request->full_name,
                'last_name' => $request->last_name,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'suffix' => $request->suffix,
                'resident_physician' => $request->resident_physician,
                'entry_date' => [
                    'entrydateArray' => $request->entrydateArray,
                ],
                'entry_time' => [
                    'entrytimeArray' => $request->entrytimeArray,
                ],
                'progress_notes' => [
                    'progressnotesArray' => $request->progressnotesArray,
                ],
                'doctor_order' => [
                    'doctororderArray' =>  $request->doctororderArray,
                ],
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            return redirect()->back()->withErrors($th);
        }

        return redirect()->route('physicianOrder');
    }
}