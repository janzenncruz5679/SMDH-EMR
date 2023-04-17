<?php

namespace App\Http\Controllers;

use App\Actions\Billing\UpdateBilling;
use App\Models\Admission;
use App\Models\Billing;
use App\Models\Medicine;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillingController extends Controller
{
    public function __construct(
        private UpdateBilling $updateBilling,
    ) {
    }

    public function index()
    {
        $billings = Billing::all()->paginate(18);
        // dd($billings);
        $records = Billing::whereDate('created_at', Carbon::now())->count();
        // $records = Billing::whereMonth('created_at', Carbon::now()->month)->count();
        $total_records = Billing::count();
        return view('user.billing.index', compact('billings', 'records', 'total_records'));
    }

    public function create(Billing $billing)
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Billing $billing)
    {
        return view('user.billing.show', compact('billing'));
    }

    public function edit(Billing $billing)
    {
        return view('user.billing.edit', compact('billing'));
    }

    public function update(Request $request, Billing $billing)
    {
        try {
            DB::beginTransaction();
            $update = $this->updateBilling->handle($request, $billing);
            // dd($update);
            DB::commit();
            return redirect()->route('billing.index');
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }

    public function destroy(Billing $billing)
    {
        //
    }
}
