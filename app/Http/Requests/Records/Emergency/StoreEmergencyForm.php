<?php

namespace App\Http\Requests\Records\Emergency;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmergencyForm extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'last_name' => ['string', 'max:255', 'required'],
            'first_name' => ['string', 'max:255', 'required'],
            'ward_room_bed_service' => ['string', 'max:255', 'required'],
            'phone' => ['string', 'max:255', 'required'],
            'gender' => ['string', 'required'],
            'civil_status' => ['string', 'required'],
            'birthday' => ['string', 'max:255', 'required'],
            'birthplace' => ['string', 'max:255', 'required'],
            'nationality' => ['string', 'max:255', 'required'],
            'religion' => ['string', 'max:255', 'required'],

            'street' => ['string', 'max:255', 'required'],
            'barangay' => ['string', 'max:255', 'required'],
            'municipality' => ['string', 'max:255', 'required'],
            'province' => ['string', 'max:255', 'required'],
            'region' => ['string', 'max:255', 'required'],
            'zip_code' => ['string', 'max:255', 'required'],

            'contact_last' => ['string', 'max:255', 'required'],
            'contact_first' => ['string', 'max:255', 'required'],
            'contact_address' => ['string', 'max:255', 'required'],
            'contact_phone' => ['string', 'max:255', 'required'],
            'contact_rtp' => ['string', 'max:255', 'required'],
        ];
    }

    public function messages()
    {
        return [
            'last_name' => 'This value is required.',
            'first_name' => 'This value is required.',
            'ward_room_bed_service' => 'This value is required.',
            'phone' => 'This value is required.',
            'gender' => 'This value is required.',
            'civil_status' => 'This value is required.',
            'birthday' => 'This value is required.',
            'birthplace' => 'This value is required.',
            'nationality' => 'This value is required.',
            'religion' => 'This value is required.',

            'street' => 'This value is required.',
            'barangay' => 'This value is required.',
            'municipality' => 'This value is required.',
            'province' => 'This value is required.',
            'region' => 'This value is required.',
            'zip_code' => 'This value is required.',

            'contact_last' => 'This value is required.',
            'contact_first' => 'This value is required.',
            'contact_address' => 'This value is required.',
            'contact_phone' => 'This value is required.',
            'contact_rtp' => 'This value is required.',
        ];
    }
}
