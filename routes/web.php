<?php

use App\Http\Controllers\{
    AdmissionsController,
    BillingController,
    DischargeSummaryController,
    HomeController,
    PatientController,
    PatientsController,
    EmergencyPatientController,
    FluidIntakeController,
    KardexController,
    StationController,
    NurseNoteController,
    NurseNotesController,
    PhysicianOrderController,
    TestingController,
};
use App\Http\Controllers\VitalSignsController;
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

    Route::resource('admissions', AdmissionsController::class);
    Route::resource('patients', PatientsController::class);
    Route::resource('patients.billing', BillingController::class)->except(['edit', 'update']);
    Route::resource('patients.vital-signs', VitalSignsController::class)->except(['edit', 'update']);
    Route::resource('patients.nurse-notes', NurseNotesController::class)->only(['index', 'create', 'store', 'show']);

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/homePage', [HomeController::class, 'homePage']);
    Route::get('/stations', [HomeController::class, 'stations']);
    // Route::get('/billing', [HomeController::class, 'billing']);


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
    ////physicianOrder view
    Route::get('stations/labOptions/physicianOrder', [PhysicianOrderController::class, 'physicianOrderview'])->name('physicianOrder');
    ////fluidIntake view
    Route::get('stations/labOptions/fluidIntake', [FluidIntakeController::class, 'fluidIntakeview'])->name('fluidIntake');
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
    ////////physician_order_add_and_view
    Route::get('/records/addPhysicianOrder', [PhysicianOrderController::class, 'addPhysicianOrder'])->name('addPhysicianOrder');
    Route::post('/records/submitPhysicianOrder', [PhysicianOrderController::class, 'submit_addPhysicianOrder'])->name('submit_addPhysicianOrder');
    Route::get('/records/viewPhysicianOrder{id}', [PhysicianOrderController::class, 'viewPhysicianOrder'])->name('viewPhysicianOrder');
    ////////fluid_intake_add_and_view
    Route::get('/records/addFluidIntake', [FluidIntakeController::class, 'addFluidIntake'])->name('addFluidIntake');
    Route::post('/records/submitFluidIntake', [FluidIntakeController::class, 'submit_addFluidIntake'])->name('submit_addFluidIntake');
    Route::get('/records/viewFluidIntake{id}', [FluidIntakeController::class, 'viewFluidIntake'])->name('viewFluidIntake');
    ////////kardex_add_and_view
    Route::get('/records/addKardex', [KardexController::class, 'addKardex'])->name('addKardex');
    Route::post('/records/submitKardex', [KardexController::class, 'submit_addKardex'])->name('submit_addKardex');
    Route::get('/records/viewKardex{id}', [KardexController::class, 'viewKardex'])->name('viewKardex');




    //vitalSigns view pdf
    Route::get('/records/pdfVitals{id}', [StationController::class, 'viewpdfVitals'])->name('viewpdfVitals');
    //nurseNotes view pdf
    Route::get('/records/pdfNurseNotes{id}', [NurseNoteController::class, 'viewpdfNurseNotes'])->name('viewpdfNurseNotes');
    //nurseNotes view pdf
    Route::get('/records/pdfDischargeSummary{id}', [DischargeSummaryController::class, 'viewpdfDischargeSummary'])->name('viewpdfDischargeSummary');
    //nurseNotes view pdf
    Route::get('/records/pdfFluidIntake{id}', [FluidIntakeController::class, 'viewpdfFluidIntake'])->name('viewpdfFluidIntake');

    //vitals update data from db
    Route::get('/records/updateVitals{id}', [StationController::class, 'updateVitals'])->name('updateVitals');
    Route::post('/records/editVitals{id}', [StationController::class, 'editVitals']);
    //nursenotes update data from db
    Route::get('/records/updateNurseNotes{id}', [NurseNoteController::class, 'updateNurseNotes'])->name('updateNurseNotes');
    Route::post('/records/editNurseNotes{id}', [NurseNoteController::class, 'editNurseNotes'])->name('editNurseNotes');
    //discharge_summary update data from db
    Route::get('/records/updateDischargeSummary{id}', [DischargeSummaryController::class, 'updateDischargeSummary'])->name('updateDischargeSummary');
    Route::post('/records/editDischargeSummary{id}', [DischargeSummaryController::class, 'editDischargeSummary'])->name('editDischargeSummary');
    //physician_order update data from db
    Route::get('/records/updatePhysicianOrder{id}', [PhysicianOrderController::class, 'updatePhysicianOrder'])->name('updatePhysicianOrder');
    Route::post('/records/editPhysicianOrder{id}', [PhysicianOrderController::class, 'editPhysicianOrder'])->name('editPhysicianOrder');
    //fluid_intake update data from db
    Route::get('/records/updateFluidIntake{id}', [FluidIntakeController::class, 'updateFluidIntake'])->name('updateFluidIntake');
    Route::post('/records/editFluidIntake{id}', [FluidIntakeController::class, 'editFluidIntake'])->name('editFluidIntake');
    //fluid_intake update data from db
    Route::get('/records/updateKardex{id}', [KardexController::class, 'updateKardex'])->name('updateKardex');
    Route::post('/records/editKardex{id}', [KardexController::class, 'editKardex'])->name('editKardex');




    //billing view
    Route::get('/billing/billingTable', [BillingController::class, 'billingTable'])->name('billingTable');
    Route::get('/billing/billingTable/updateBilling{or_no}', [BillingController::class, 'updateBilling'])->name('updateBilling');
    Route::post('/billing/billingTable/editBilling{or_no}', [BillingController::class, 'editBilling'])->name('editBilling');

    Route::resource('test-patient', AdmissionsController::class);
});
