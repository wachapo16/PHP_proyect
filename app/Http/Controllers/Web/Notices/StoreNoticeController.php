<?php

namespace App\Http\Controllers\Web\Notices;

use App\Models\Notice;
use Illuminate\Http\Request;

class StoreNoticeController
{
    public function __invoke(Request $request)
    {
        $title = $request->get('title');
        $content = $request->get('content');
        Notice::create([
            'title' => $title,
            'content' => $content
        ]);
        return redirect('notices');
    }
}
