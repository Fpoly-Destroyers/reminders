<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|email|unique:users,email',
            'fullname' => 'required',
            // Password must be at least 6 characters, contain at least one uppercase letter, one lowercase letter, and one number.
            'password' => 'required|min:6|regex:/[a-z]/|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'confirm-password' => 'required|same:password',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Email is required.',
            'email.email' => 'Email must be a valid email address.',
            'email.unique' => 'Email is already taken.',
            'fullname.required' => 'Fullname is required.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 6 characters.',
            'password.regex' => 'Password must contain at least one uppercase letter, one lowercase letter, and one number.',
            'confirm-password.required' => 'Confirm password is required.',
            'confirm-password.same' => 'Confirm password must match password.',
        ];
    }
}
