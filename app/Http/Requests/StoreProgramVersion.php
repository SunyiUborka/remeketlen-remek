<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProgramVersion extends FormRequest
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
            'program_id' => 'required',
            'user_id' => 'required',
            'version_number' => 'required',
            'release_date' => 'nullable',
            'program_file' => 'required',
        ];
    }
    public function messages() {
        return [
    
            'program_id.required' => 'Nincs megadva, hogy melyik programot szeretnénk lekérni',
                'user_id.required' => 'Nincs felhasználó',
                'version_number.required' => "Adjon meg egy verziószámot",
    

                'program_file.required' => 'Nincs feltöltve program',
                  
    
       ];
    }

}
