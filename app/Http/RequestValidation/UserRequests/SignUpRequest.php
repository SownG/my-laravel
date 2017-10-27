<?php

/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 10/26/2017
 * Time: 12:01 AM
 */

namespace App\Http\RequestValidation\UserRequests;

use App\Http\RequestValidation\Request;

class SignUpRequest extends Request
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
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'name' => 'required'
        ];
    }

    public function messages() {
        return [
            'email.unique:users,email' => 'Your email is existed',
            'email.required' => 'Your email is required',
            'email.email' => 'Please provide a valid email',
        ];
    }
}