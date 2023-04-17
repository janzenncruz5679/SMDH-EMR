<?php

namespace App\Http\Controllers;

use App\Models\First_admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Actions\Dashboard\PatientChart;
use App\Actions\Dashboard\PatientNotes;
use App\Models\Admission;
use App\Models\Billing;
use App\Models\Emergency;
use App\Models\Outpatient;
use Carbon\Carbon;
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
        $total_admission = Admission::whereDate('created_at', Carbon::now())->count();
        $total_emergency = Emergency::whereDate('created_at', Carbon::now())->count();
        $total_outpatient = Outpatient::whereDate('created_at', Carbon::now())->count();
        $billings = Billing::whereDate('created_at', Carbon::now())->count();
        [$labels, $data] = PatientChart::getDataForCharts();
        [$labels_donut, $data_donut] = PatientNotes::getDataForNotes();

        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                return view('user.home', [
                    'labels' => $labels,
                    'data' => $data,
                    'labels_donut' => $labels_donut,
                    'data_donut' => $data_donut,
                    'total_admission' => $total_admission,
                    'total_emergency' => $total_emergency,
                    'total_outpatient' => $total_outpatient,
                    'billings' => $billings,
                ]);
            } else if (Auth::user()->usertype == '1') {
                return view('admin.home', [
                    'labels' => $labels,
                    'data' => $data,
                    'labels_donut' => $labels_donut,
                    'data_donut' => $data_donut,
                    'total_admission' => $total_admission,
                    'total_emergency' => $total_emergency,
                    'total_outpatient' => $total_outpatient,
                    'billings' => $billings,
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
