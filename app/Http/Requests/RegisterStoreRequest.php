<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterStoreRequest extends FormRequest
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
            "username" => ["required", "unique:users", "max:16"],
            "email" => ["required", "unique:users", "max:255"],
            "password" => ["required", "min:8", "max:255" , "confirmed"]
        ];
    }

    public function messages() {
        return [

            'username.required' => 'A felhasználónév megadása kötelező!',
                'username.unique' => 'Ilyen felhasználó név már létezik',
                'username.max' => "Túl hosszú a felhasználónév!",




                'email.required' => 'Az email megadása kötelező!',
                'email.unique' => 'Evvel az e-maillel már létre van hozva fiók',
                  'email.max' => "Hosszú ez egy e-mail címnek!",




                'password.required' => 'A jelszó megadása kötelező!',
                'password.max' => "Túl hosszú a jelszó!",
                'password.min' => "A jelszónak legalább 8 karaktert kell tartalmaznia!",
               'password.confirmed' => "A két jelszó nem egyezik"



        ];

    }


}
