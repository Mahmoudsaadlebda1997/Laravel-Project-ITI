<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:3|max:15',
            'description' => 'required|min:15|max:125'
        ];
    }
    public function messages()
    {
        return[

            'title.required' => "Heyyyy U trying Enter Null title",
            'description.required' => "Maan U Enter Null description Really ?!",

        ];

    }
}
