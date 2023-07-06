<?php

namespace App\Http\Controllers\Web\Tasks;

use App\Http\Controllers\Controller;
use App\Models\Task;

class GetAllTasksController extends Controller
{
    public function __invoke()
    {
        $tasks = Task::all(['id','state', 'title', 'description']);
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }
}