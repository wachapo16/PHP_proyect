<?php

namespace App\Http\Controllers\Api\Notices;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class CreateNoticeController extends Controller
{
    public function createNotice(Request $request)
    {
        $title = $request->get('title');
        $content = $request->get('content');
        Notice::create([
            'title' => $title,
            'content' => $content
        ]);
        return response()->json([
            'message' => 'Aviso creado.'
        ]);
    }
}
