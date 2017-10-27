<?php

/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 10/19/2017
 * Time: 11:46 PM
 */
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Data\Repositories\UserRepository;
use App\Entities\User;
use Illuminate\Http\Request;
use App\Http\RequestValidation\UserRequests\SignUpRequest;
use App\Http\RequestValidation\UserRequests\LoginRequest;
use Auth;

class UserController extends Controller
{

    public function signUp(SignUpRequest $request, UserRepository $userRepository) {
        $user = $request->all();
        $userRepository->createUser($user);
        return $this->responseSuccess();
    }

    public function login(LoginRequest $request){
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            $user = User::where('email', '=', $request['email'])->first();
            return $this->responseSuccess(compact('user'));
        }
        return $this->responseErrors('Invalid email or password', 500);
    }

    public function getUsers(UserRepository $userRepository) {
        $data = $userRepository->findAll();
        return $this->responseSuccess($data);
    }
}