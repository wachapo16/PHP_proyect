<?php

namespace App\Http\Controllers\Web\Tasks;


use App\Models\Task;

class EditTaskController 
{
    public function __invoke(int $taskId)
    {
        $task = Task::find($taskId);
        return view('tasks.edit', [
            'tasks' => $task
        ]);

    }
}