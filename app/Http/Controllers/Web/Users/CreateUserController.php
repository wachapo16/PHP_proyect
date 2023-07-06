<?php

namespace App\Http\Controllers\Web\Users;

use App\Models\User;

class CreateUserController
{
    public function __invoke()
    {
        
        return view('users.create');
    }
}