<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\First_admission;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function billingTable()
    {
        $data_billings = Billing::select('or_no', 'full_name', 'total', 'medicine', 'lab', 'xray', 'ecg', 'oxygen', 'nbs', 'income')
            ->orderBy('or_no', 'asc')
            ->paginate(18);

        $data_admissions = DB::table('first_admissions')->select('id', 'full_name', 'patient_id', 'created_at')->get();

        foreach ($data_admissions as $data_admission) {
            $admission = DB::table('first_admissions')
                ->where('patient_id', $data_admission->patient_id)
                ->first();

            if ($admission) {
                $new_full_name = $admission->full_name; // Replace with your new full name value

                // Update full_name field in first_admissions table
                DB::table('first_admissions')
                    ->where('patient_id', $data_admission->patient_id)
                    ->update(['full_name' => $new_full_name]);

                // Check if full_name exists in billings table
                $billing = Billing::where('or_no', $data_admission->patient_id)->first();

                if ($billing) {
                    // If full_name exists in billings table, update it
                    $billing->full_name = $new_full_name;
                    $billing->save();
                } else {
                    // If full_name does not exist in billings table, create a new record
                    $new_billing = new Billing;
                    $new_billing->or_no = $data_admission->patient_id;
                    $new_billing->full_name = $new_full_name;
                    $new_billing->save();
                }
            }
        }

        // dd($data_admissions->toArray());

        return view('user.billing', [
            'data_admissions' => $data_admissions,
            'data_billings' => $data_billings,
        ]);
    }

    public function updateBilling($or_no)
    {
        $view_bill = Billing::where('or_no', $or_no)->firstorFail();
        return view('user.billingSection.billingUpdate', [
            'view_bill' => $view_bill,
        ]);
    }

    public function editBilling(Request $request, $or_no)
    {
        $edit_bill = Billing::where('or_no', $or_no)->firstOrFail();

        $edit_bill->total = $request->total;
        $edit_bill->medicine = $request->medicine;
        $edit_bill->lab = $request->lab;
        $edit_bill->xray = $request->xray;
        $edit_bill->ecg = $request->ecg;
        $edit_bill->oxygen = $request->oxygen;
        $edit_bill->nbs = $request->nbs;
        $edit_bill->income = $request->income;
        $edit_bill->save();

        return redirect()->route('billingTable');
    }
}