<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingStepOneRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'customer_name' => 'required|min:3|max:100',

            'phone' => 'required|digits:10',

            'relocation_type' => 'required',

            'pickup_city' => 'required|exists:cities,id',

            'pickup_address' => 'required|min:10',

            'destination_city' => 'required|exists:cities,id',

            'destination_address' => 'required|min:10',

        ];
    }

    public function messages()
    {
        return [

            'customer_name.required' => 'Please enter your name.',

            'phone.required' => 'Mobile number is required.',

            'phone.digits' => 'Enter valid 10 digit mobile number.',

            'pickup_city.required' => 'Select pickup city.',

            'destination_city.required' => 'Select destination city.'

        ];
    }
}