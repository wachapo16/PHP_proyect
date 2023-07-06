<?php

namespace App\Http\Controllers\Api\Notices;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class UpdateNoticeController extends Controller
{
    public function updateNotice($noticeId, Request $request)
    {
        $newTitle = $request->get('title');
        $newContent = $request->get('content');

        $notice = Notice::find($noticeId);
        $notice->title = $newTitle;
        $notice->content = $newContent;
        $notice->save();

        return response()->json([
            'message' => 'Aviso actualizado'
        ]);
    }
}
