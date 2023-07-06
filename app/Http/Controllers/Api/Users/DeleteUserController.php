<?php

namespace App\Http\Controllers\Api\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteUserController extends Controller
{
    public function deleteUser($userId, Request $request)
    {
        User::destroy($userId);

        return response()->json([
            'message' => 'Usuario Eliminado'
        ]);
    }
}
