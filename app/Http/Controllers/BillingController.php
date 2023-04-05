<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Billing;
use Illuminate\Http\Request;

class BillingController extends Controller
{

    public function index()
    {
        $billings = Billing::all()->paginate(10);
        return view('user.billing.index', compact('billings'));
    }

    public function create()
    {
        //
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
        //
    }

    public function update(Request $request, Billing $billing)
    {
        //
    }

    public function destroy(Billing $billing)
    {
        //
    }
}
