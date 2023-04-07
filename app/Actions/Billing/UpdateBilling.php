<?php

namespace App\Actions\Billing;

// use App\Http\Requests\Records\Outpatient\StoreOutpatientForm;

use App\Models\Billing;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateBilling
{

    public function handle(Request $request, Billing $billing)
    {
        $this->UpdateBilling($request, $billing);

        return $billing;
    }

    private function UpdateBilling(Request $request, Billing $billing)
    {
        $billing_id = Billing::findorfail($billing->id);
        $billing_id->update([
            'medicine' => $request->medicine,
            'lab' => $request->lab,
            'xray' => $request->xray,
            'ecg' => $request->ecg,
            'oxygen' => $request->oxygen,
            'nbs' => $request->nbs,
            'income' => $request->income,
            'total' => $request->total,
        ]);
    }
}