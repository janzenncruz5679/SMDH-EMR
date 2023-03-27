<?php

namespace App\Http\Controllers;

use App\Models\First_admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Actions\Dashboard\PatientChart;
use App\Actions\Dashboard\PatientNotes;
use Illuminate\Support\Facades\DB;

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
        [$labels, $data] = PatientChart::getDataForCharts();
        [$labels_donut, $data_donut] = PatientNotes::getDataForNotes();

        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                return view('user.home', [
                    'labels' => $labels,
                    'data' => $data,
                    'labels_donut' => $labels_donut,
                    'data_donut' => $data_donut,
                ]);
            } else if (Auth::user()->usertype == '1') {
                return view('admin.home', [
                    'labels' => $labels,
                    'data' => $data,
                    'labels_donut' => $labels_donut,
                    'data_donut' => $data_donut,
                ]);
            }
        } else {
            return redirect()->back();
        }
    }

    public function piechart()
    {
        // $record = DB::table('first_admissions')
        //     ->select(DB::raw('perma_address'))
        //     ->get();

        //dd($record->toArray());
        // $data['chart'] = json_encode($record);
        return view('user.home');
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
