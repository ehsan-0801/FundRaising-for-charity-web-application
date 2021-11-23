<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class event extends FormRequest
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
            'eventId'=>'required',
            'description'=>'required',
            'raisedAmount'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'eventId.required' => '**event id cannot be empty !',
            'description.required' => '**description cannot be empty !',
            'raisedAmount.required' => '**raisedAmount cannot be empty !',

        ];
    }
}
