<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Transaction extends FormRequest
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
            'totalAmount'=>'required',
            'commissionAmount'=>'required',
            'date'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'totalAmount.required' => '**Total Amount cannot be empty !',
            'commissionAmount.required' => '**Commission Amount cannot be empty !',
            'date.required' => '**Date cannot be empty !',

        ];
    }
}
