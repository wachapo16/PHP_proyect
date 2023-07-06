<?php

namespace App\Http\Controllers\Web\Tasks;

use App\models\Task;
use Illuminate\Http\Request;

class StoreTaskController
{
    public function __invoke(Request $request)
    {
        
        $title = $request->get('title');
        $description = $request->get('description');
        $userId =$request->get('user_id');
        

        
        
        Task::create([
            'state' => 'Por hacer',
            'title' =>$title,
            'description' =>$description,
            'user_id' => $userId
            
        ]);
        return redirect('tasks');
    }
}