<?php

namespace App\Http\Controllers\Web\Tasks;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class UpdateTaskController extends Controller
{
    public function __invoke(int $taskId, Request $request)
    {
       
        $newTitle = $request->get('title');
        $newDescription = $request->get('description');

        $task = Task::find($taskId);
        
        $task->title = $newTitle;
        $task->description = $newDescription;
        $task->save();

        return redirect('tasks');
    }
}