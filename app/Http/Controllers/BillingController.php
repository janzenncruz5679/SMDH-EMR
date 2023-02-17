<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function billingTable()
    {
        $data_admissions = DB::table('first_admissions')->select('id', 'full_name', 'patient_id', 'created_at')->get();

        foreach ($data_admissions as $data_admission) {
            $count = DB::table('billings')
                ->where('or_no', $data_admission->patient_id)
                ->where('full_name', $data_admission->full_name)
                ->count();
            $admission = DB::table('first_admissions')
                ->where('id', $data_admission->id)
                ->first();
            if ($count == 0 && $admission->full_name == $data_admission->full_name) {
                // delete old data
                DB::table('billings')
                    ->where('or_no', $data_admission->patient_id)
                    ->delete();
                // insert new data
                DB::table('billings')->insert([
                    'full_name' => $data_admission->full_name,
                    'or_no' => $data_admission->patient_id,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }

        return view('user.billing', [
            'data_admissions' => $data_admissions,
        ]);
    }
}
