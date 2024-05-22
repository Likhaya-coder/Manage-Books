<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class StoreRegistrationRequest extends FormRequest
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
            'firstname' => ['required','string','max:50'],
            'lastname' => ['required','string','max:50'],
            'email' => ['required','email','unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
            'terms' => 'accepted',
        ];
    }
}
