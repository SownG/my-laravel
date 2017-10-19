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

class UserController extends Controller
{
    public function getUsers(UserRepository $userRepository) {
        $data = $userRepository->findAll();
        return $this->responseSuccess($data);
    }
}