<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdatePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'old_password' => ['required'],
            'password' => ['required', 'min:8', 'max:255', 'confirmed']
        ];
    }

    public function messages()
    {
        return [
            'old_password.required' => 'Adja meg a jelenlegi jelszavát!',
            'password.required' => 'Új jelszó megadása!',
            'password.min' => 'Túl rövid az új jelszó!',
            'password.max' => 'Túl hosszú az új jelszó!',
            'password.confirmed' => 'A jelszavak nem egyeznek!'
        ];
    }
}
