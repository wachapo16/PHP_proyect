<?php

namespace App\Http\Controllers\Web\Users;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class StoreUserController
{
    public function __invoke(Request $request)
    {

        $name = $request->get('first_name');
        $lastName = $request->get('last_name');
        $email = $request->get('email');
        $password = $request->get('password');
        $userName = $request->get('user_name');
        $dateNow = Carbon::now();


        User::create([
            'first_name' => $name,
            'last_name' => $lastName,
            'email' => $email,
            'password' => $password,
            'user_name' => $userName,
            'last_login' => $dateNow,
            'registered_at' => $dateNow
        ]);

        return redirect('users');
    }
}
