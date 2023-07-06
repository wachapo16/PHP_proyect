<?php

namespace App\Http\Controllers\Web\Tasks;

use App\Models\User;

class CreateTaskController
{
    public function __invoke()
    {
        $users = User::all();

        return view('tasks.create', compact('users'));
    }
}
