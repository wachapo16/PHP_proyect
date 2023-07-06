<?php

namespace App\Http\Controllers\Web\Notices;

use App\Http\Controllers\Controller;
use App\Models\Notice;

class GetAllNoticesController extends Controller
{
    public function __invoke()
    {
        $notices = Notice::all(['id', 'title', 'content']);
        return view('notices.index', [
            'notices' => $notices
        ]);
    }
}
