<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManagerRequest extends FormRequest
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
            'userName' =>'required|regex:/^[a-zA-Z]/',
            'email'=> 'required|max:50|email',
            'password'=> 'required|string|min:5|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/'
        ];
    }

    public function messages(){
        return [
            'userName.required' => 'name required...',
            'email.required' => 'email required...',
            'password.required'=> 'password required ...',
            'password.min:5' => 'password must be minimum 5 characters',
            'email.max:50' => 'email must be max 50 characters'
        ];
    }
}
