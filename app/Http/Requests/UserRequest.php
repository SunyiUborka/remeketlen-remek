<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['nullable'],
            'newpassword' => ['nullable', 'min:8', 'max:255' , 'confirmed'],
            'user_image' => ['nullable']
        ];
    }

    public function messages() {
        return [




                'password.required' => 'A jelszó megadása kötelező!',
                'password.max' => "Túl hosszú a jelszó!",
                'password.min' => "A jelszónak legalább 8 karaktert kell tartalmaznia!",
               'password.confirmed' => "A két jelszó nem egyezik"



        ];
    }
}
