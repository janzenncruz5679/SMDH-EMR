<?php

namespace App\Http\Controllers;

use App\Models\FluidIntake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class FluidIntakeController extends Controller
{
    public function fluidIntakeview()
    {
        $fluidintakeDatas = FluidIntake::query()->paginate(20);
        return view(
            'user.stationSection.fluid_intake_view.fluidIntake',
            [
                'fluidintakeDatas' => $fluidintakeDatas,
            ]
        );
    }
    public function addFluidIntake()
    {
        return view('user.stationSection.fluid_intake_view.addFluidIntake');
    }

    public function submit_addFluidIntake(Request $request)
    {
        // dd($request->toArray());
        FluidIntake::create([
            'full_name' => $request->full_name,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'suffix' => $request->suffix,

            'patient_info' => [
                'gender' => $request->gender,
                'age' => $request->age,
                'ward' => $request->ward,
                'bed' => $request->bed,
                'diagnosis' => $request->diagnosis,
            ],
            'date_of_intake' => [
                'intake_dateArray' => $request->intake_dateArray,
            ],
            'intake' => [
                'intakeArray' => $request->intakeArray,
            ],
            'oral' => [
                'oralArray' => $request->oralArray,
            ],
            'parental' => [
                'parentalArray' => $request->parentalArray,
            ],
            'oral_parental_total' => [
                'oralparentaltotalArray' => $request->oralparentaltotalArray,
            ],
            'urine' => [
                'urineArray' => $request->urineArray,
            ],
            'drainage' => [
                'drainageArray' => $request->drainageArray,
            ],
            'others' => [
                'othersArray' => $request->othersArray,
            ],
            'urine_drainage_others_total' => [
                'urinedrainageotherstotalArray' => $request->urinedrainageotherstotalArray,
            ],
        ]);

        return redirect()->route('fluidIntake');
    }

    public function viewFluidIntake($id)
    {
        $fluidintakes = FluidIntake::find($id);
        // dd($fluidintakes->toArray());
        return view('user.stationSection.fluid_intake_view.infoFluidIntake', [
            'fluidintakes' => $fluidintakes,
        ]);
    }

    public function updateFluidIntake($id)
    {
        $fluidintakes = FluidIntake::find($id);
        // dd($nursenotes->toArray());
        return view('user.stationSection.fluid_intake_view.updateFluidIntake', [
            'fluidintakes' => $fluidintakes,
        ]);
    }

    public function editFluidIntake(Request $request, $id)
    {
        // dd($request->toArray());
        try {
            DB::beginTransaction();
            FluidIntake::where('id', $id)->update([
                'full_name' => $request->full_name,
                'last_name' => $request->last_name,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'suffix' => $request->suffix,

                'patient_info' => [
                    'gender' => $request->gender,
                    'age' => $request->age,
                    'ward' => $request->ward,
                    'bed' => $request->bed,
                    'diagnosis' => $request->diagnosis,
                ],
                'date_of_intake' => [
                    'intake_dateArray' => $request->intake_dateArray,
                ],
                'intake' => [
                    'intakeArray' => $request->intakeArray,
                ],
                'oral' => [
                    'oralArray' => $request->oralArray,
                ],
                'parental' => [
                    'parentalArray' => $request->parentalArray,
                ],
                'oral_parental_total' => [
                    'oralparentaltotalArray' => $request->oralparentaltotalArray,
                ],
                'urine' => [
                    'urineArray' => $request->urineArray,
                ],
                'drainage' => [
                    'drainageArray' => $request->drainageArray,
                ],
                'others' => [
                    'othersArray' => $request->othersArray,
                ],
                'urine_drainage_others_total' => [
                    'urinedrainageotherstotalArray' => $request->urinedrainageotherstotalArray,
                ],
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            return redirect()->back()->withErrors($th);
        }

        return redirect()->route('fluidIntake');
    }

    public function viewpdfFluidIntake($id)
    {
        $pdf_fluidintake = FluidIntake::find($id);
        $fluid_pdf = PDF::loadView('user.stationSection.fluid_intake_view.pdfFluidIntake', [
            'pdf_fluidintake' => $pdf_fluidintake,
        ])->setPaper('a4', 'portrait');

        return $fluid_pdf->stream($pdf_fluidintake->full_name . " Fluid Intake" . ".pdf");
    }
}
