<?php

use App\Http\Controllers\AdmissionsController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\DischargeSummaryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\EmergencyPatientController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\NurseNoteController;
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


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/homePage', [HomeController::class, 'homePage']);
    Route::get('/patientPage', [HomeController::class, 'patientPage']);
    Route::get('/stations', [HomeController::class, 'stations']);
    Route::get('/billing', [HomeController::class, 'billing']);


    ///////////////admission patients section
    //admission add data from db
    Route::get('/patientPage/addPatient', [PatientController::class, 'addPatient']);
    Route::post('/patientPage/admission', [PatientController::class, 'submit_admit_patient']);

    //admission read data from db
    Route::get('/patientPage/admission', [PatientController::class, 'admission']);
    Route::get('/patientPage/admission/search', [PatientController::class, 'admissionSearch']);

    //view data from db
    Route::get('/patientPage/viewAdmission{id}', [PatientController::class, 'viewAdmission']);

    //admission update data from db
    Route::get('/patientPage/updateAdmission{id}', [PatientController::class, 'updateAdmission']);
    Route::post('/patientPage/editAdmission{id}', [PatientController::class, 'editAdmission']);

    //admission view pdf
    Route::get('/patientPage/viewpdfAdmission{id}', [PatientController::class, 'viewpdfAdmission']);
    //admission save pdf
    Route::get('/patientPage/savepdfAdmission{id}', [PatientController::class, 'savepdfAdmission']);



    //////////////////////////////////station section
    Route::get('stations/labOptions', [StationController::class, 'labOptions']);
    ////vitalsigns view
    Route::get('stations/labOptions/vitalSigns', [StationController::class, 'vitalSigns'])->name('vitalsTab');
    ////nursenotes view
    Route::get('stations/labOptions/nurseNotes', [NurseNoteController::class, 'nurseNotesview'])->name('nurseNotes');
    ////dischargeSummary view
    Route::get('stations/labOptions/dischargeSummary', [DischargeSummaryController::class, 'dischargeSummaryview'])->name('dischargeSummary');


    ///////////////emergency patients section
    //add data from db
    Route::get('/patientPage/addEmergency', [EmergencyPatientController::class, 'addEmergency']);
    Route::post('/patientPage/emergency', [EmergencyPatientController::class, 'submit_emergency_patient']);

    //read data from db
    Route::get('/patientPage/emergency', [EmergencyPatientController::class, 'emergency']);
    Route::get('/patientPage/emergency/search', [EmergencyPatientController::class, 'emergencySearch']);

    //view data from db
    Route::get('/patientPage/viewEmergency{id}', [EmergencyPatientController::class, 'viewEmergency']);


    ////////vitalSigns_add_and_view
    Route::get('/records/addVitals', [StationController::class, 'addVitals'])->name('addVitals');
    Route::post('/records/submitVitals', [StationController::class, 'submit_addVitals'])->name('submitVitals');
    Route::get('/records/vitalSigns', [StationController::class, 'vitalSigns'])->name('vitalSigns');
    Route::get('/records/viewVitals{id}', [StationController::class, 'viewVitalSigns'])->name('viewVitals');
    ////////nurseNotes_add_and_view
    Route::get('/records/addNurseNotes', [NurseNoteController::class, 'addNurseNotes'])->name('addNurseNotes');
    Route::post('/records/submitNurseNotes', [NurseNoteController::class, 'submit_addNurseNotes'])->name('submitNurseNotes');
    Route::get('/records/viewNurseNotes{id}', [NurseNoteController::class, 'viewNurseNotes'])->name('viewNurseNotes');
    ////////nurseNotes_add_and_view
    Route::get('/records/addDischargeSummary', [DischargeSummaryController::class, 'addDischargeSummary'])->name('addDischargeSummary');
    Route::post('/records/submitDischargeSummary', [DischargeSummaryController::class, 'submit_addDischargeSummary'])->name('submit_addDischargeSummary');
    Route::get('/records/viewDischargeSummary{id}', [DischargeSummaryController::class, 'viewDischargeSummary'])->name('viewDischargeSummary');






    //vitals update data from db
    Route::get('/records/updateVitals{id}', [StationController::class, 'updateVitals'])->name('updateVitals');
    Route::post('/records/editVitals{id}', [StationController::class, 'editVitals']);
    //nursenotes update data from db
    Route::get('/records/updateNurseNotes{id}', [NurseNoteController::class, 'updateNurseNotes'])->name('updateNurseNotes');
    Route::post('/records/editNurseNotes{id}', [NurseNoteController::class, 'editNurseNotes'])->name('editNurseNotes');
    //discharge_summary update data from db
    Route::get('/records/updateDischargeSummary{id}', [DischargeSummaryController::class, 'updateDischargeSummary'])->name('updateDischargeSummary');
    Route::post('/records/editDischargeSummary{id}', [DischargeSummaryController::class, 'editDischargeSummary'])->name('editDischargeSummary');




    //billing view
    Route::get('/billing/billingTable', [BillingController::class, 'billingTable'])->name('billingTable');
    Route::get('/billing/billingTable/updateBilling{or_no}', [BillingController::class, 'updateBilling'])->name('updateBilling');
    Route::post('/billing/billingTable/editBilling{or_no}', [BillingController::class, 'editBilling'])->name('editBilling');

    Route::resource('test-patient', AdmissionsController::class);
});
