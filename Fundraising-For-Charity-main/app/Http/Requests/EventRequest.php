<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'commission' => 'required|numeric|min:0|max:100',
            'startDate' => 'required',
            'endDate' => 'required',
        ];
    }

    public function messages(){
        return [
            'commission.required' => '***commission required...',
            'startDate.required' => 'start Date required...',
            'endDate.required'=> 'end Date required ...'
        ];
    }
}
