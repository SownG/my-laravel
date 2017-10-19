<?php
namespace App\Data\RepositoryInterfaces;

use App\Entities\User;

interface IUserRepository
{

    /**
     * @param $id
     * @return User
     */
    public function find($id);

    /**
     * @return User[]
     */
    public function findAll();

    public function createUser($user);
}