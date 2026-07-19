<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingInventoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'configuration'=>'required',

            'moving_date'=>'required|date|after_or_equal:today',

            'moving_time'=>'required',

            'pickup_floor'=>'required|integer|min:0',

            'destination_floor'=>'required|integer|min:0',

            'vehicle_type'=>'required',

            'inventory'=>'required|array|min:1'

        ];
    
    }
     public function messages()
    {
        return [

            'inventory.required'=>'Please select at least one item.'

        ];
    }
}
