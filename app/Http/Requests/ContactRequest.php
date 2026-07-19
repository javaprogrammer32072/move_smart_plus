<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validation Rules
     */
    public function rules(): array
    {
        return [

            'name' => [
                'required',
                'string',
                'min:3',
                'max:100'
            ],

            'email' => [
                'required',
                'email',
                'max:150'
            ],

            'phone' => [
                'required',
                'digits_between:10,15'
            ],

            'subject' => [
                'required',
                'string',
                'min:5',
                'max:200'
            ],

            'message' => [
                'required',
                'string',
                'min:10',
                'max:5000'
            ],

        ];
    }

    /**
     * Custom Error Messages
     */
    public function messages(): array
    {
        return [

            'name.required' => 'Please enter your name.',
            'name.min' => 'Name must be at least 3 characters.',
            'name.max' => 'Name cannot exceed 100 characters.',

            'email.required' => 'Please enter your email.',
            'email.email' => 'Please enter a valid email address.',

            'phone.required' => 'Please enter your phone number.',
            'phone.digits_between' => 'Phone number must be between 10 and 15 digits.',

            'subject.required' => 'Please enter subject.',
            'subject.min' => 'Subject must contain at least 5 characters.',

            'message.required' => 'Please enter your message.',
            'message.min' => 'Message must contain at least 10 characters.',

        ];
    }

    /**
     * Optional: Friendly Field Names
     */
    public function attributes(): array
    {
        return [
            'name' => 'Full Name',
            'email' => 'Email Address',
            'phone' => 'Phone Number',
        ];
    }
}