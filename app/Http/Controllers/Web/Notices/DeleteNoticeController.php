<?php

namespace App\Http\Controllers\Web\Notices;

use App\Http\Controllers\Controller;
use App\Models\Notice;

class DeleteNoticeController extends Controller
{
    public function __invoke(int $noticeId)
    {
        $notice = Notice::find($noticeId);
        $notice->delete();
        return redirect('notices');
    }
}
