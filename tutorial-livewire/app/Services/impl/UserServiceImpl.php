<?php

namespace App\Services\Impl;

use App\Services\UserService;

class UserServiceImpl implements UserService
{
    private array $users;

    public function login(string $username): bool{
        return $username;
    }
}
