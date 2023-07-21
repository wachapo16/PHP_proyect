<?php

namespace App\Http\Controllers\Web\Auth;

use App\Repositories\EloquentUserRepository;
use Illuminate\Http\Request;

class CreateAccountController
{
    public function __invoke(Request $request)
    {
        $name = $request->get('first_name');
        $lastName = $request->get('last_name');
        $email = $request->get('email');
        $password = $request->get('password');
        $userName = $request->get('user_name');

        dd($name, $lastName, $email, $password, $userName);

        $userRepository = new EloquentUserRepository();
        $userRepository->store($name, $lastName, $email, $password, $userName);

        //return redirect()->to('/login');

    }
}
