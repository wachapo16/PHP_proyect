<?php

namespace App\Http\Controllers\Api\Tasks;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class UpdateStateController extends Controller
{
    public function updateState($taskId, Request $request)
    {
        $task = Task::find($taskId);

        if ($task->state == "Por hacer") {
            $task->state = "En progreso";
        } elseif ($task->state == "En progreso") {
            $task->state = "Finalizada";
        } else {
            return response()->json(['error' => 'Error en los estados de las tareas']);
        }

        $task->save();

        return response()->json([
            "message" => "Estado de Tarea Actualizado"
        ]);
    }
}
