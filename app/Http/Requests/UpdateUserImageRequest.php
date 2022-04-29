<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateUserImageRequest extends FormRequest
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
                'user_image' => ['required', 'mimes:png,jpg,jpeg', 'max:8000']
        ];
    }

    public function messages()
    {
        return [
            'user_image.required' => 'Kép megadása kötelező!',
            'user_image.mimes' => 'Csak képet lehet feltölteni!',
            'user_image.max' => 'Túl nagy a fájl'
        ];
    }
}
