<?php

namespace App\Http\Controllers;

use App\Models\First_admission;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function query(Request $request)
    {
        if ($request->filled('search')) {
            $patientDatas = First_admission::search($request->search)->get()
                ->paginate();
        } else {
            $patientDatas = First_admission::paginate();
        }

        return view('user.patientSection.admission_search', [
            'patientDatas' => $patientDatas,
        ]);
    }
}