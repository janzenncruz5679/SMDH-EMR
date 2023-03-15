<?php

namespace App\Http\Requests\Records\NurseNotes;

use Illuminate\Foundation\Http\FormRequest;

class StoreNurseNotesForm extends FormRequest
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
            'ward' => ['required', 'string', 'max:255'],

            'obsDate.0' => ['required'],
            'obsDate.1' => ['required'],
            'obsDate.2' => ['required'],
            'obsDate.3' => ['required'],
            'obsDate.4' => ['required'],

            'obsTime.0' => ['required'],
            'obsTime.1' => ['required'],
            'obsTime.2' => ['required'],
            'obsTime.3' => ['required'],
            'obsTime.4' => ['required'],

            'obsFocus.0' => ['required'],
            'obsFocus.1' => ['required'],
            'obsFocus.2' => ['required'],
            'obsFocus.3' => ['required'],
            'obsFocus.4' => ['required'],

            'obsDar.0' => ['required'],
            'obsDar.1' => ['required'],
            'obsDar.2' => ['required'],
            'obsDar.3' => ['required'],
            'obsDar.4' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'ward.required' => 'This value is required',

            'obsDate.0.required' => 'This value is required.',
            'obsDate.1.required' => 'This value is required.',
            'obsDate.2.required' => 'This value is required.',
            'obsDate.3.required' => 'This value is required.',
            'obsDate.4.required' => 'This value is required.',

            'obsTime.0.required' => 'This value is required.',
            'obsTime.1.required' => 'This value is required.',
            'obsTime.2.required' => 'This value is required.',
            'obsTime.3.required' => 'This value is required.',
            'obsTime.4.required' => 'This value is required.',

            'obsFocus.0.required' => 'This value is required.',
            'obsFocus.1.required' => 'This value is required.',
            'obsFocus.2.required' => 'This value is required.',
            'obsFocus.3.required' => 'This value is required.',
            'obsFocus.4.required' => 'This value is required.',

            'obsDar.0.required' => 'This value is required.',
            'obsDar.1.required' => 'This value is required.',
            'obsDar.2.required' => 'This value is required.',
            'obsDar.3.required' => 'This value is required.',
            'obsDar.4.required' => 'This value is required.',
        ];
    }
}
