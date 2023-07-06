<?php

namespace App\Http\Controllers\Web\Notices;

use App\Http\Controllers\Controller;
use App\Models\Notice;

use Illuminate\Http\Request;

class UpdateNoticeController extends Controller
{
    public function __invoke(int $noticeId, Request $request)
    {
        $newTitle = $request->get('title');
        $newContent = $request->get('content');
        $notice = Notice::find($noticeId);
        $notice->title = $newTitle;
        $notice->content = $newContent;
        $notice->save();
        return redirect('notices');
    }
}
