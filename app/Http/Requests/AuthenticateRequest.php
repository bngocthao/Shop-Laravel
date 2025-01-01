<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthenticateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Set to true if you want all users to access this request.
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
//            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:8', 'confirmed'],
            'iAgree' => ['required', 'accepted'],
        ];
    }

    /**
     * Customize the error messages for validation.
     */
    public function messages()
    {
        return [
            'name.required' => 'Please enter your name.',
            'email.required' => 'An email is required for registration.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'Please enter a password.',
            'password.min' => 'Password should be at least 8 characters.',
            'iAgree.accepted' => 'Terms and conditions is required for registration.',
            'iAgree.required' => 'Terms and conditions is required for registration.',

        ];
    }
}
