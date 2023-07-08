<?php

namespace App\Http\Controllers\Api\Notices;

use App\Http\Controllers\Controller;
use App\Models\Notice;

class GetAllNoticeController extends Controller
{
    public function getNotice()
    {
        $notices = Notice::all(['id', 'title', 'content']);
    return response()->json($notices);
    }
}
