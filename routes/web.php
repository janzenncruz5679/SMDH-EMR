<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\EmergencyPatientController;
use App\Http\Controllers\StationController;
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
Route::get('/testemergency', [TestingController::class, 'index_second']);


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/homePage', [HomeController::class, 'homePage']);
    Route::get('/patientPage', [HomeController::class, 'patientPage']);
    Route::get('/stations', [HomeController::class, 'stations']);
    Route::get('/billing', [HomeController::class, 'billing']);


    ///////////////admission patients section
    //add data from db
    Route::get('/patientPage/addPatient', [PatientController::class, 'addPatient']);
    Route::post('/patientPage/admission', [PatientController::class, 'submit_admit_patient']);

    // read data from db
    Route::get('/patientPage/admission', [PatientController::class, 'admission']);
    Route::get('/patientPage/admission/search', [PatientController::class, 'admissionSearch']);

    //view data from db
    Route::get('/patientPage/viewAdmission{id}', [PatientController::class, 'viewAdmission']);

    //update data from db
    Route::get('/patientPage/updateAdmission{id}', [PatientController::class, 'updateAdmission']);
    Route::post('/patientPage/editAdmission{id}', [PatientController::class, 'editAdmission']);

    ///////////////station section
    Route::get('stations/labOptions', [StationController::class, 'labOptions']);
    ////vitalsigns view
    Route::get('stations/labOptions/vitalSigns', [StationController::class, 'vitalSigns']);


    ///////////////emergency patients section
    //add data from db
    Route::get('/patientPage/addEmergency', [EmergencyPatientController::class, 'addEmergency']);
    Route::post('/patientPage/emergency', [EmergencyPatientController::class, 'submit_emergency_patient']);

    //read data from db
    Route::get('/patientPage/emergency', [EmergencyPatientController::class, 'emergency']);
    Route::get('/patientPage/emergency/search', [EmergencyPatientController::class, 'emergencySearch']);

    //view data from db
    Route::get('/patientPage/viewEmergency{id}', [EmergencyPatientController::class, 'viewEmergency']);

    //update data from db
    Route::get('/patientPage/updateEmergency{id}', [EmergencyPatientController::class, 'updateEmergency']);
    Route::post('/patientPage/editEmergency{id}', [EmergencyPatientController::class, 'editEmergency']);
});