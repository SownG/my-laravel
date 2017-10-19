<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 10/18/2017
 * Time: 6:04 PM
 */

namespace App\Data\Repositories;

use App\Data\RepositoryInterfaces\IUserRepository;
use App\Entities\User;

class UserRepository implements IUserRepository
{

    public function find($id)
    {
        // TODO: Implement find() method.
        return User::find($id);
    }

    public function findAll()
    {
        // TODO: Implement findAll() method.
        return User::all();
    }

    public function createUser($data)
    {
        // TODO: Implement createUser() method.
        $user = new User;

        $user->name = $data['name'];
        $user->password = bcrypt($data['password']);
        $user->email = $data['email'];

        $user->save();

        return $user;
    }
}