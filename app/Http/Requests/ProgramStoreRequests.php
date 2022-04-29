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
            'developer' => 'nullable',
            'release_date' => ['nullable', 'max:255'],
            'program_image' => ['required', 'image','mimes:png,jpg,jpeg', 'max:8000'],
            'program_file' => ["required", 'file','mimes:zip'],
            'description' => 'nullable',
            'category_name' => "required",
        ];
}

    public function messages() {
        return [
            'name.required' => 'A név megadása kötelező!',
            'name.max' => "Túl hosszú a program neve, ha program több mint 45 karaktert tartalmaz",
            'type_name.required' => 'A típus megadása kötelező!',
            'developer.max' => 'Készítő neve túl hosszú!',
            'category_name.required' => 'Nem adott meg kategóriát',
            'program_file.required' => 'Nincs feltöltve program',
            'program_image.mimes' => 'Nem megfelelő kép formátum',
            'program_image.required' => "Nincs kép a progamhoz",
            'program_file.mimes' => "Csak zip formátum elfogadott!",
       ];
    }
}