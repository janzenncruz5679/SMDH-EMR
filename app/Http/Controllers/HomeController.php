<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                return view('user.home');
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function homePage()
    {
        return view('user.homePage');
    }

    public function patientPage()
    {
        return view('user.patientPage');
    }

    public function stations()
    {
        return view('user.stations');
    }

    public function billing()
    {
        return view('user.billing');
    }
}