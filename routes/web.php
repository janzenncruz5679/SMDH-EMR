<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\AdmissionHistoryController;
use App\Http\Controllers\AdmissionsController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\DischargeSummaryController;
use App\Http\Controllers\DischargeSummaryHistoryController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\EmergencyHistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\EmergencyPatientController;
use App\Http\Controllers\FluidIntakeController;
use App\Http\Controllers\FluidIntakeHistoryController;
use App\Http\Controllers\KardexController;
use App\Http\Controllers\NurseNoteController;
use App\Http\Controllers\NurseNoteHistoryController;
use App\Http\Controllers\OutpatientController;
use App\Http\Controllers\OutpatientHistoryController;
use App\Http\Controllers\PhysicianOrderController;
use App\Http\Controllers\StaffsController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\VitalSignController;
use App\Http\Controllers\VitalSignHistoryController;
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
    Route::get('home', [HomeController::class, 'index'])->name('home');
    // Route::get('/', [HomeController::class, 'piechart'])->name('piechart');
    Route::get('/homePage', [HomeController::class, 'homePage'])->name('homePage');
    Route::get('/patientPage', [HomeController::class, 'patientPage'])->name('patientPage');
    Route::get('/stations', [HomeController::class, 'stations'])->name('stations');


    ///////////////admission patients section
    //admission add data from db
    Route::get('/patientPage/addPatient', [PatientController::class, 'addPatient'])->name('addPatient');
    Route::post('/patientPage/admission', [PatientController::class, 'submit_admit_patient']);

    //admission read data from db
    // Route::get('/patientPage/admission', [PatientController::class, 'admission'])->name('admission.index');
    // Route::get('/patientPage/admission/search', [PatientController::class, 'admissionSearch']);

    //view data from db
    Route::get('/patientPage/viewAdmission{id}', [PatientController::class, 'viewAdmission']);

    //admission update data from db
    Route::get('/patientPage/updateAdmission{id}', [PatientController::class, 'updateAdmission']);
    Route::post('/patientPage/editAdmission{id}', [PatientController::class, 'editAdmission']);

    //admission view pdf
    Route::get('/patientPage/viewpdfAdmission{id}', [PatientController::class, 'viewpdfAdmission']);
    //admission save pdf
    Route::get('/patientPage/savepdfAdmission{id}', [PatientController::class, 'savepdfAdmission']);


    ////physicianOrder view
    Route::get('stations/labOptions/physicianOrder', [PhysicianOrderController::class, 'physicianOrderview'])->name('physicianOrder');
    ////fluidIntake view
    Route::get('stations/labOptions/Kardex', [KardexController::class, 'kardexview'])->name('kardex');


    ///////////////emergency patients section
    //add data from db
    Route::get('/patientPage/addEmergency', [EmergencyPatientController::class, 'addEmergency']);
    Route::post('/patientPage/emergency', [EmergencyPatientController::class, 'submit_emergency_patient']);

    //read data from db
    Route::get('/patientPage/emergency', [EmergencyPatientController::class, 'emergency']);
    Route::get('/patientPage/emergency/search', [EmergencyPatientController::class, 'emergencySearch']);

    //view data from db
    Route::get('/patientPage/viewEmergency{id}', [EmergencyPatientController::class, 'viewEmergency']);


    ////////physician_order_add_and_view
    Route::get('/records/addPhysicianOrder', [PhysicianOrderController::class, 'addPhysicianOrder'])->name('addPhysicianOrder');
    Route::post('/records/submitPhysicianOrder', [PhysicianOrderController::class, 'submit_addPhysicianOrder'])->name('submit_addPhysicianOrder');
    Route::get('/records/viewPhysicianOrder{id}', [PhysicianOrderController::class, 'viewPhysicianOrder'])->name('viewPhysicianOrder');
    ////////kardex_add_and_view
    Route::get('/records/addKardex', [KardexController::class, 'addKardex'])->name('addKardex');
    Route::post('/records/submitKardex', [KardexController::class, 'submit_addKardex'])->name('submit_addKardex');
    Route::get('/records/viewKardex{id}', [KardexController::class, 'viewKardex'])->name('viewKardex');



    //physician_order update data from db
    Route::get('/records/updatePhysicianOrder{id}', [PhysicianOrderController::class, 'updatePhysicianOrder'])->name('updatePhysicianOrder');
    Route::post('/records/editPhysicianOrder{id}', [PhysicianOrderController::class, 'editPhysicianOrder'])->name('editPhysicianOrder');
    //fluid_intake update data from db
    Route::get('/records/updateKardex{id}', [KardexController::class, 'updateKardex'])->name('updateKardex');
    Route::post('/records/editKardex{id}', [KardexController::class, 'editKardex'])->name('editKardex');



    Route::resource('test-patient', AdmissionsController::class);

    Route::get('users/archive', [StaffsController::class, 'archive'])->name('users.archive');
    Route::resource('users', StaffsController::class)->except(['create', 'store']);

    Route::post('admissions/search', [AdmissionController::class, 'searchAdmission'])->name('admission.searchAdmission');
    Route::get('admission/pdf{admission}', [AdmissionController::class, 'pdf'])->name('admission.pdf');
    Route::get('admission/show_all{admission}', [AdmissionController::class, 'show_all'])->name('admission.show_all');
    Route::resource('admission', AdmissionController::class);
    Route::resource('admissionHistory', AdmissionHistoryController::class)->only(['index', 'show']);

    Route::post('emergency/search', [EmergencyController::class, 'searchEmergency'])->name('emergency.searchEmergency');
    Route::get('emergency/pdf{emergency}', [EmergencyController::class, 'pdf'])->name('emergency.pdf');
    Route::get('emergency/show_all{emergency}', [EmergencyController::class, 'show_all'])->name('emergency.show_all');
    Route::resource('emergency', EmergencyController::class);
    Route::resource('emergencyHistory', EmergencyHistoryController::class)->only(['index', 'show']);

    Route::post('outpatient/search', [OutpatientController::class, 'searchOutpatient'])->name('emergency.searchOutpatient');
    Route::get('outpatient/pdf{outpatient}', [OutpatientController::class, 'pdf'])->name('outpatient.pdf');
    Route::get('outpatient/show_all{outpatient}', [OutpatientController::class, 'show_all'])->name('outpatient.show_all');
    Route::resource('outpatient', OutpatientController::class);
    Route::resource('outpatientHistory', OutpatientHistoryController::class)->only(['index', 'show']);

    /////stations
    Route::post('vitalSign/search', [VitalSignController::class, 'searchVitalSign'])->name('vitalSign.searchVitalSign');
    Route::get('vitalSign/pdf{vitalSign}', [VitalSignController::class, 'pdf'])->name('vitalSign.pdf');
    Route::get('vitalSign/show_all{vitalSign}', [VitalSignController::class, 'show_all'])->name('vitalSign.show_all');
    Route::resource('vitalSign', VitalSignController::class);
    Route::resource('vitalSignHistory', VitalSignHistoryController::class);

    Route::post('nurseNote/search', [NurseNoteController::class, 'searchNurseNote'])->name('nurseNote.searchNurseNote');
    Route::get('nurseNote/pdf{nurseNote}', [NurseNoteController::class, 'pdf'])->name('nurseNote.pdf');
    Route::get('nurseNote/show_all{nurseNote}', [NurseNoteController::class, 'show_all'])->name('nurseNote.show_all');
    Route::resource('nurseNote', NurseNoteController::class);
    Route::resource('nurseNoteHistory', NurseNoteHistoryController::class);

    Route::post('dischargeSummary/search', [DischargeSummaryController::class, 'searchDischargeSummary'])->name('dischargeSummary.searchDischargeSummary');
    Route::get('dischargeSummary/pdf{dischargeSummary}', [DischargeSummaryController::class, 'pdf'])->name('dischargeSummary.pdf');
    Route::get('dischargeSummary/show_all{dischargeSummary}', [DischargeSummaryController::class, 'show_all'])->name('dischargeSummary.show_all');
    Route::resource('dischargeSummary', DischargeSummaryController::class);
    Route::resource('dischargeSummaryHistory', DischargeSummaryHistoryController::class);

    Route::post('fluidIntake/search', [FluidIntakeController::class, 'searchFluidIntake'])->name('fluidIntake.searchFluidIntake');
    Route::get('fluidIntake/pdf{fluidIntake}', [FluidIntakeController::class, 'pdf'])->name('fluidIntake.pdf');
    Route::get('fluidIntake/show_all{fluidIntake}', [FluidIntakeController::class, 'show_all'])->name('fluidIntake.show_all');
    Route::resource('fluidIntake', FluidIntakeController::class);
    Route::resource('fluidIntakeHistory', FluidIntakeHistoryController::class);

    Route::resource('billing', BillingController::class);
});
