<?php

namespace App\Actions\Records\FluidIntake;

use App\Models\FluidIntake;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateFluidIntake
{

    public function handle(Request $request, FluidIntake $fluidIntake)
    {
        $this->UpdateFluidIntake($request, $fluidIntake);

        return $fluidIntake;
    }

    private function UpdateFluidIntake(Request $request, FluidIntake $fluidIntake)
    {
        $fluidIntake_id = FluidIntake::findorfail($fluidIntake->id);
        $fluidIntake_id->update([
            'full_name' => $request->first_name . ' ' . $request->middle_name . ' ' . $request->last_name . ' ' . $request->suffix,
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
    }
}
