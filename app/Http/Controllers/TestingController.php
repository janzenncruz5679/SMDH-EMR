<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index()
    {
        $patients_Dummy = Admission::create([
            'last_name' => 'Kwalapuk',
            'first_name' => 'Ermengarde',
            'middle_name' => 'V',
            'age' => '10',
            'gender' => 'Female',
            'address' => 'San Juan Balagtas Bulacan',
            // 'address' => [
            //     'street' => 'ohio',
            //     'city' => 'ohio',
            // ],
        ]);

        dd($patients_Dummy);
    }
}