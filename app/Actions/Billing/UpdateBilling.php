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
            'medicine' => [
                'medicine_name' => $request->medicine_name,
                'medicine_cost' => $request->medicine_cost,
                'medicine_qty' => $request->medicine_qty,
                'medicine_total' => $request->medicine_total,
                'medicine_grandTotal' => $request->medicine_grandTotal,
            ],
            'lab' => [
                'lab_procedure' => $request->lab_procedure,
                'lab_cost' => $request->lab_cost,
                'lab_qty' => $request->lab_qty,
                'lab_total' => $request->lab_total,
                'lab_grandTotal' => $request->lab_grandTotal,
            ],
            'xray' => [
                'xray_procedure' => $request->xray_procedure,
                'xray_cost' => $request->xray_cost,
                'xray_qty' => $request->xray_qty,
                'xray_total' => $request->xray_total,
                'xray_grandTotal' => $request->xray_grandTotal,
            ],
            'ecg' => [
                'ecg_procedure' => $request->ecg_procedure,
                'ecg_cost' => $request->ecg_cost,
                'ecg_qty' => $request->ecg_qty,
                'ecg_total' => $request->ecg_total,
                'ecg_grandTotal' => $request->ecg_grandTotal,
            ],
            'oxygen' => [
                'oxygen_procedure' => $request->oxygen_procedure,
                'oxygen_cost' => $request->oxygen_cost,
                'oxygen_qty' => $request->oxygen_qty,
                'oxygen_total' => $request->oxygen_total,
                'oxygen_grandTotal' => $request->oxygen_grandTotal,
            ],
            // 'nbs' => $request->final_diagnosis,
            // 'plan' => $request->plan,
        ]);
    }
}
