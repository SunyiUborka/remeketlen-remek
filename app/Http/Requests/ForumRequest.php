<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForumRequest extends FormRequest
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
          
                'program_id' => ['required'],
                'threads_description' => "required",
                'post_title' => ['required' , 'max:45'],
                'post_description' => 'required',
                
                'comment_text' => ['required'],
                
            
        ];
    }


    public function messages()
    {
        return [
          
            return [
                'program_id.required' => 'Nincs megadva program',
                'threads_description.required' => "írja ki a threadet!",
                'post_title_description.required' => "írja ki a threadet!",
                'post_description.required' => "Megadása kötelező!",
                
            ];
                
            
        ];
    }

}

