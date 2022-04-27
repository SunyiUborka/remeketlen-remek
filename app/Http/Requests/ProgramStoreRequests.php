<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramStoreRequests extends FormRequest
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
            'name' => ['required' , 'max:45'],
            'type_name' => "required",
            'category_name' => "required",
            'developer' => 'nullable',
            'release_date' => 'nullable',
            'program_image' => "required",
            'program_file' => 'required',
            'description' => 'nullable'
        ];


 
}


public function messages() {
    return [

        'name.required' => 'A név megadása kötelező!',
            'type_name.required' => 'A típus megadása kötelező!',
            'name.max' => "Túl hosszú a program neve, ha program több mint 45 karaktert tartalmaz",




            'category_name.required' => 'Nem adott meg kategóriát',
            'program_file.required' => 'Nincs feltöltve program',
              'program_image.required' => "Nincs kép a progamhoz",

   ];
}

}