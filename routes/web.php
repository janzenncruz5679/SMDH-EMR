<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TestingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/test', [TestingController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/homePage', [HomeController::class, 'homePage']);
Route::get('/patientPage', [HomeController::class, 'patientPage']);
Route::get('/stations', [HomeController::class, 'stations']);
Route::get('/billing', [HomeController::class, 'billing']);


//add data from db
Route::get('/patientPage/addPatient', [PatientController::class, 'addPatient']);

// read data from db
Route::get('/patientPage/admission', [PatientController::class, 'admission']);
Route::get('/patientPage/admission/search', [PatientController::class, 'admissionSearch']);

//update data from db
Route::get('/patientPage/updateAdmission{id}', [PatientController::class, 'updateAdmission']);