<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EloquentUserRepository
{
    public function store(string $name, string $lastName, string $email, string $password, string $userName): void
    {
        $passwordHash = Hash::make($password);
        User::create([
            'first_name' => $name,
            'last_name' => $lastName,
            'email' => $email,
            'password' => $passwordHash,
            'user_name' => $userName,
        ]);
    }

    public function findByEmail(string $email): ?User
    {
        return User::where('email', '=', $email)->first();
    }

}

