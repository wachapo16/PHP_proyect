<?php

namespace App\Http\Controllers\Web\Notices;

class CreateNoticeController
{
    public function __invoke()
    {
        return view('notices.create');
    }
}
