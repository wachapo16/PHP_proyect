<?php

namespace App\Http\Controllers\Api\Tasks;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class DeleteTaskController extends Controller
{
    public function deleteTask ($taskId, Request $request)
    {
        Task::destroy($taskId);

    return response()->json([
        'message' => 'Tarea eliminada'
    ]);
       
    }
}
