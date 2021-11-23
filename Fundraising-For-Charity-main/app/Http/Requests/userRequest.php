<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
            'name'=>'required|min:3',
            'mail'=>'required|email',
            'flexRadioDefault'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'password'=>'required|confirmed| min: 4',
            'password_confirmation'=> 'required|min:4'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => '**name cannot be empty !',
            'mail.required' => '**mail cannot be empty !',
            'flexRadioDefault.required' => '**gender cannot be empty !',
            'address.required' => '**address cannot be empty !',
            'phone.required' => '**phone cannot be empty !',
            'password.required' => '**password cannot be empty !',
            'password_confirmation.required' => '**confirm pass cannot be empty !'

        ];
    }
}
