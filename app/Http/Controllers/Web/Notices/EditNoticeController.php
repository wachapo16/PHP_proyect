<?php

namespace App\Http\Controllers\Web\Notices;
use App\Models\Notice;

    class EditNoticeController
    {
        public function __invoke(int $noticeId)
        {
            $notice = Notice::find($noticeId);
            return view('notices.edit', [
                'notice' => $notice
            ]);
        }
    }
