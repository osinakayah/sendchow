<?php

namespace SendChow\Modules\Authentication\Request;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'first_name'    => 'required|string|min:6|max:32',
            'last_name'     => 'required|string|min:6|max:32',
            'email'         => 'unique:users|email',
            'phone_number'  => 'unique:users',
            'password'      => 'required|string|min:6'
        ];
    }
}
