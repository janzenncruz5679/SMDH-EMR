<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdmissionRequest extends FormRequest
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
            'address' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'ward_room_bed_service' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'birthday' => 'required',

            //second_admission
            'perma_address' => 'required',
            'civil_status' => 'required',
            'birthplace' => 'required',
            'nationality' => 'required',
            'religion' => 'required',

            //third_admission

            //fourth_admission
            'start_date' => 'required',
            'start_time' => 'required',
            'end_date' => 'required',
            'end_time' => 'required',
            'admitting_physician' => 'required',
            'admitting_clerk' => 'required',
            'admission_type' => 'required',
            'referred_by' => 'required',

            //fifth_admission
            'ssc' => 'required',
            'alert_allergic' => 'required',
            'health_insurance' => 'required',
            'coverage_insurance' => 'required',
            'furnished_by' => 'required',
            'informant_address' => 'required',
            'relation_to_patient' => 'required',

            //sixth_admission
            'admission_diagnosis' => 'required',
            'principal_diagnosis' => 'required',
            'other_diagnosis' => 'required',
            'idc_code' => 'required',
            'principal_operation' => 'required',
            'other_operation' => 'required',
            'icpm_code' => 'required',
        ];
    }

    public function messages()
    {
        return [
            //first
            'address.required' => '*this field is required',
            'last_name.required' => '*this field is required',
            'first_name.required' => '*this field is required',
            'ward_room_bed_service.required' => '*this field is required',
            'gender.required' => '*required',
            'phone' => '*this field is required',
            'birthday' => '*this field is required',

            //second
            'perma_address.required' => '*this field is required',
            'civil_status.required' => '*this field is required',
            'birthplace' => '*this field is required',
            'nationality' => '*this field is required',
            'religion' => '*this field is required',

            //third

            //fourth
            'start_date.required' => '*this field is required',
            'start_time.required' => '*this field is required',
            'end_date.required' => '*this field is required',
            'end_time.required' => '*this field is required',
            'admitting_physician.required' => '*this field is required',
            'admitting_clerk.required' => '*this field is required',
            'admission_type.required' => '*this field is required',
            'referred_by.required' => '*this field is required',

            //fifth
            'ssc.required' => '*this field is required',
            'alert_allergic.required' => '*this field is required',
            'health_insurance.required' => '*this field is required',
            'coverage_insurance.required' => '*this field is required',
            'furnished_by.required' => '*this field is required',
            'informant_address.required' => '*this field is required',
            'relation_to_patient.required' => '*this field is required',

            //sixth
            'admission_diagnosis.required' => '*this field is required',
            'principal_diagnosis.required' => '*this field is required',
            'other_diagnosis.required' => '*this field is required',
            'idc_code.required' => '*this field is required',
            'principal_operation.required' => '*this field is required',
            'other_operation.required' => '*this field is required',
            'icpm_code.required' => '*this field is required',
        ];
    }
}
