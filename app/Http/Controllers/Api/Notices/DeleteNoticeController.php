<?php

namespace App\Http\Controllers\Api\Notices;

use App\Http\Controllers\Controller;
use App\Models\Notice;

class DeleteNoticeController extends Controller
{
    public function deleteNotice($noticeId)
    {
        Notice::destroy($noticeId);

        return response()->json([
            'message' => 'Aviso eliminado'
        ]);
    }
}
