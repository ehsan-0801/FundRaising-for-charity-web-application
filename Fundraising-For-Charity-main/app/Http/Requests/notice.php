<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class notice extends FormRequest
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
            'title'=>'required',
            'message'=>'required',
            'userId'=>'required',
            'date'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'title.required' => '**title cannot be empty !',
            'message.required' => '**message cannot be empty !',
            'userId.required' => '**user id cannot be empty !',
            'date.required' => '**date cannot be empty !',

        ];
    }
}
