<?php

namespace App\Http\Controllers;

use App\Actions\Billing\UpdateBilling;
use App\Models\Admission;
use App\Models\Billing;
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
        $billings = Billing::all()->paginate(10);
        return view('user.billing.index', compact('billings'));
    }

    public function create(Billing $billing)
    {
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Billing $billing)
    {
        //
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