<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 10/26/2017
 * Time: 4:49 PM
 */

namespace App\Http\RequestValidation\UserRequests;


use App\Http\RequestValidation\Request;

class LoginRequest extends Request
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
    public function rules() {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];
    }
}