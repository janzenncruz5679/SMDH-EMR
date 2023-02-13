<?php

namespace App\Http\Requests\Admissions;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewPatientForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'address' => ['string', 'max:255', 'required'],
            'sr_no' => ['string', 'max:255', 'required'],
            'type' => ['string', 'max:255', 'required'],
            'last_name' => ['string', 'max:255', 'required'],
            'first_name' => ['string', 'max:255', 'required'],
            'middle_name' => ['string', 'max:255', 'required'],
            'ward_room_bed_service' => ['string', 'max:255', 'required'],
            'perma_address' => ['string', 'max:255', 'required'],
            'phone' => ['string', 'max:255', 'required'],
            'gender' => ['string', 'max:255', 'required'],
            'civil_status' => ['string', 'max:255', 'required'],
            'birthday' => ['string', 'max:255', 'required'],
            'age' => ['integer'],
            'birthplace' => ['string', 'max:255', 'required'],
            'nationality' => ['string', 'max:255', 'required'],
            'religion' => ['string', 'max:255', 'required'],
            'occupation' => ['string', 'max:255', 'nullable'],

            'employer_name' => ['string', 'max:255', 'nullable'],
            'employer_address' => ['string', 'max:255', 'nullable'],
            'employer_phone' => ['string', 'max:255', 'nullable'],

            'father_name' => ['string', 'max:255', 'nullable'],
            'father_address' => ['string', 'max:255', 'nullable'],
            'father_phone' => ['string', 'max:255', 'nullable'],
            'mother_maiden_name' => ['string', 'max:255', 'nullable'],
            'mother_address' => ['string', 'max:255', 'nullable'],
            'mother_phone' => ['string', 'max:255', 'nullable'],
            'spouse_name' => ['string', 'max:255', 'nullable'],
            'spouse_address' => ['string', 'max:255', 'nullable'],
            'spouse_phone' => ['string', 'max:255', 'nullable'],

            'start_date' => ['date', 'required'],
            'start_time' => ['date', 'required'],
            'end_date' => ['date', 'required'],
            'end_time' => ['date', 'required'],
            'total_days' => ['date', 'required'],

            'admitting_physician' => ['string', 'max:255', 'required'],
            'admitting_clerk' => ['string', 'max:255', 'required'],
            'admission_type' => ['string', 'max:255', 'required'],
            'referred_by' => ['string', 'max:255', 'required'],

            'ssc' => ['string', 'max:255', 'required'],
            'alert_allergic' => ['string', 'max:255', 'nullable'],
            'hospitalization_plan' => ['string', 'max:255', 'nullable'],
            'health_insurance' => ['string', 'max:255', 'nullable'],
            'coverage_insurance' => ['string', 'max:255', 'nullable'],

            'furnished_by' => ['string', 'max:255', 'required'],
            'informant_address' => ['string', 'max:255', 'required'],
            'relation_to_patient' => ['string', 'max:255', 'required'],

            'admission_diagnosis' => ['string', 'max:255', 'nullable'],
            'principal_diagnosis' => ['string', 'max:255', 'nullable'],
            'other_diagnosis' => ['string', 'max:255', 'nullable'],
            'idc_code' => ['string', 'max:255', 'nullable'],
            'principal_operation' => ['string', 'max:255', 'nullable'],
            'other_operation' => ['string', 'max:255', 'nullable'],
            'icpm_code' => ['string', 'max:255', 'nullable'],
        ];
    }
}
