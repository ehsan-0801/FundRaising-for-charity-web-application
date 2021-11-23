<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class comment extends FormRequest
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
            'userId'=>'required',
            'description'=>'required',
            'date'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'userId.required' => '**user id cannot be empty !',
            'description.required' => '**description cannot be empty !',
            'date.required' => '**date cannot be empty !',

        ];
    }
}
