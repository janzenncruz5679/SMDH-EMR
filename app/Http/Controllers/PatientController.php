<?php

namespace App\Http\Controllers;

use App\Models\First_admission;
use App\Models\Second_admission;
use App\Models\Patient_id;
use App\Http\Requests\AdmissionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Carbon\Carbon;

class PatientController extends Controller
{
    public function admission()
    {
        $patientDatas = First_admission::query()->paginate(18);


        // $patientDatas = collect($patientDatas)->paginate(15);
        return view('user.patientSection.admission', [
            'patientDatas' => $patientDatas,
        ]);
    }

    public function admissionSearch(Request $request)
    {

        if ($request->search) {
            $searchTerms = explode(' ', $request->search);
            $patientDatas = First_admission::where('type', '=', 'Admission')
                // ->orwhere('type', '=', 'Emergency')
                ->where(function ($q) use ($searchTerms) {
                    foreach ($searchTerms as $term) {
                        $q->orWhere('full_name', 'LIKE', '%' . $term . '%');
                        // $q->orWhere('patient_id', $term );
                    }
                })
                ->paginate(18);
            return view('user.patientSection.admission_search', [
                'patientDatas' => $patientDatas,
            ]);
        } else {
            return view('user.patientSection.admission_search');
        }
    }

    //view admission patient form
    public function viewAdmission($id)
    {
        $view_first = First_admission::find($id);
        $view_second = Second_admission::find($id);
        return view('user.patientSection.infoAdmission', [
            'view_first' => $view_first,
            'view_second' => $view_second,
        ]);
    }

    //get add admission patient form
    public function addPatient()
    {
        return view('user.patientSection.addpatient');
    }
    //post add admission form patient
    public function submit_admit_patient(AdmissionRequest $request)
    {

        $patients_base = Patient_id::create();
        $patients_Dummy = $patients_base->admission_table()->create([
            'patient_id' => $patients_base->id,
            'full_name' =>  $request->full_name,
            'suffix' =>  $request->suffix,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'ward_room_bed_service' => $request->ward_room_bed_service,
            'sr_no' => $request->sr_no,
            'type' => $request->type,

            'personal_info' => [
                'gender' => $request->gender,
                'phone' => $request->phone,
                'age' => $request->age,
                'birthday' => $request->birthday,
                'birthplace' => $request->birthplace,
                'nationality' => $request->nationality,
                'occupation' => $request->occupation,
                'religion' => $request->religion,
                'civil_status' => $request->civil_status,
            ],
            'full_address' => [
                'street' => $request->street,
                'municipality' => $request->municipality,
                'province' => $request->province,
                'region' => $request->region,
                'barangay' => $request->barangay,
                'zip_code' => $request->zip_code,
                'country' => $request->country,
            ],
            'contact_person' => [
                'contact_last' => $request->contact_last,
                'contact_first' => $request->contact_first,
                'contact_middle' => $request->contact_middle,
                'contact_suffix' => $request->contact_suffix,
                'contact_address' => $request->contact_address,
                'contact_phone' => $request->contact_phone,
                'contact_rtp' => $request->contact_rtp,
            ],

            'perma_address' => $request->perma_address,
        ]);
        $patients_Dummy->admission_two()->create([
            'record_id' => $patients_Dummy->record_no,

            'person_of_contact' => [
                'employer' => [
                    'name' => $request->employer_name,
                    'address' => $request->employer_address,
                    'contact' => $request->employer_phone,
                ],
                'father' => [
                    'name' => $request->father_name,
                    'address' => $request->father_address,
                    'contact' => $request->father_phone,
                ],
                'mother' => [
                    'name' => $request->mother_maiden_name,
                    'address' => $request->mother_address,
                    'contact' => $request->mother_phone,
                ],
                'spouse' => [
                    'name' => $request->spouse_name,
                    'address' => $request->spouse_address,
                    'contact' => $request->spouse_phone,
                ],
            ],
            'admitting_personel' => [
                'admitting_clerk' => $request->admitting_clerk,
                'admitting_physician' => $request->admitting_physician,
                'referred_by' => $request->referred_by,
            ],
            'admission_start' => [
                'start_date' => $request->start_date,
                'start_time' => $request->start_time,
            ],
            'admission_end' => [
                'end_date' => $request->end_date,
                'end_time' => $request->end_time,
            ],
            'admission_diff' => $request->total_days,
            'type_of_admission' => $request->admission_type,
            'allergic' => $request->alert_allergic,
            'ssc' => $request->ssc,
            'insurance' => [
                'hospitalization_plan' => $request->hospitalization_plan,
                'health_insurance' => $request->health_insurance,
                'coverage_insurance' => $request->coverage_insurance,
                // 'furnished_by' => $request->furnished_by,
                // 'informant_address' => $request->informant_address,
                // 'relation_to_patient' => $request->relation_to_patient,
            ],
            'diagnosis' => [
                'admission_diagnosis' => $request->admission_diagnosis,
                'principal_diagnosis' => $request->principal_diagnosis,
                'other_diagnosis' => $request->other_diagnosis,
            ],
            'idc_code' => $request->idc_code,
            'other_opt' => [
                'principal_operation' => $request->principal_operation,
                'other_operation' => $request->other_operation,
            ],
            'icpm_code' => $request->icpm_code,
        ]);
        return redirect('/patientPage/admission');
    }

    //update admission patient form
    public function updateAdmission($id)
    {
        $view_first = First_admission::find($id);
        $view_second = Second_admission::find($id);
        return view('user.patientSection.updatepatient', [
            'view_first' => $view_first,
            'view_second' => $view_second,
        ]);
    }

    public function editAdmission(AdmissionRequest $request, $id)
    {
        $edit_first = First_admission::find($id);
        $edit_second = Second_admission::find($id);

        $edit_second->person_of_contact = [
            'employer' => [
                'name' => $request->employer_name,
                'address' => $request->employer_address,
                'contact' => $request->employer_phone,
            ],
            'father' => [
                'name' => $request->father_name,
                'address' => $request->father_address,
                'contact' => $request->father_phone,
            ],
            'mother' => [
                'name' => $request->mother_maiden_name,
                'address' => $request->mother_address,
                'contact' => $request->mother_phone,
            ],
            'spouse' => [
                'name' => $request->spouse_name,
                'address' => $request->spouse_address,
                'contact' => $request->spouse_phone,
            ],
        ];

        $edit_second->admitting_personel = [
            'admitting_clerk' => $request->admitting_clerk,
            'admitting_physician' => $request->admitting_physician,
            'referred_by' => $request->referred_by,
        ];

        $edit_second->admission_start = [
            'start_date' => $request->start_date,
            'start_time' => $request->start_time,
        ];

        $edit_second->admission_end = [
            'end_date' => $request->end_date,
            'end_time' => $request->end_time,
        ];

        $edit_second->admission_diff = $request->total_days;
        $edit_second->type_of_admission = $request->admission_type;
        $edit_second->allergic = $request->alert_allergic;
        $edit_second->ssc = $request->ssc;
        $edit_second->idc_code = $request->idc_code;
        $edit_second->icpm_code = $request->icpm_code;

        $edit_second->insurance = [
            'hospitalization_plan' => $request->hospitalization_plan,
            'health_insurance' => $request->health_insurance,
            'coverage_insurance' => $request->coverage_insurance,
            // 'furnished_by' => $request->furnished_by,
            // 'informant_address' => $request->informant_address,
            // 'relation_to_patient' => $request->relation_to_patient,
        ];

        $edit_second->diagnosis = [
            'admission_diagnosis' => $request->admission_diagnosis,
            'principal_diagnosis' => $request->principal_diagnosis,
            'other_diagnosis' => $request->other_diagnosis,
        ];

        $edit_second->other_opt = [
            'principal_operation' => $request->principal_operation,
            'other_operation' => $request->other_operation,
        ];

        $edit_second->save();

        $edit_first->full_name =  $request->full_name;
        $edit_first->suffix = $request->suffix;
        $edit_first->last_name = $request->last_name;
        $edit_first->first_name = $request->first_name;
        $edit_first->middle_name = $request->middle_name;
        $edit_first->ward_room_bed_service = $request->ward_room_bed_service;
        $edit_first->sr_no = $request->sr_no;
        $edit_first->type = $request->type;

        $edit_first->personal_info = [
            'gender' => $request->gender,
            'phone' => $request->phone,
            'age' => $request->age,
            'birthday' => $request->birthday,
            'birthplace' => $request->birthplace,
            'nationality' => $request->nationality,
            'occupation' => $request->occupation,
            'religion' => $request->religion,
            'civil_status' => $request->civil_status,
        ];
        $edit_first->full_address = [
            'street' => $request->street,
            'municipality' => $request->municipality,
            'province' => $request->province,
            'region' => $request->region,
            'barangay' => $request->barangay,
            'zip_code' => $request->zip_code,
            'country' => $request->country,
        ];

        $edit_first->contact_person = [
            'contact_last' => $request->contact_last,
            'contact_first' => $request->contact_first,
            'contact_middle' => $request->contact_middle,
            'contact_suffix' => $request->contact_suffix,
            'contact_address' => $request->contact_address,
            'contact_phone' => $request->contact_phone,
            'contact_rtp' => $request->contact_rtp,
        ];

        $edit_first->perma_address = $request->perma_address;
        $edit_first->save();

        return redirect('/patientPage/admission');
    }

    public function viewpdfAdmission($id)
    {
        $view_first = First_admission::find($id);
        $view_second = Second_admission::find($id);
        $admission_pdf = PDF::loadView('user.pdf.admission_details', [
            'view_first' => $view_first,
            'view_second' => $view_second,
        ])->setPaper('a4', 'portrait');

        return $admission_pdf->stream("Admission_patient_" . $view_first->patient_id . ".pdf");
    }

    public function savepdfAdmission($id)
    {
        $view_first = First_admission::find($id);
        $view_second = Second_admission::find($id);
        $admission_pdf = PDF::loadView('user.pdf.admission_details', [
            'view_first' => $view_first,
            'view_second' => $view_second,
        ])->setPaper('a4', 'portrait');

        return $admission_pdf->download("Admission_patient_" . $view_first->patient_id . ".pdf");
    }
}
