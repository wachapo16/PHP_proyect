<?php

namespace App\Repositories;

use App\Models\Notice;
use Illuminate\Database\Eloquent\Collection;

class EloquentNoticeRepository
{
    public function getAll(): Collection
    {
        return Notice::all(['id', 'title', 'content']);
    }

    public function create(array $atributes): Notice
    {
        return Notice::create($atributes);
    }

    public function findById(int $noticeId): Notice
    {
        return Notice::find($noticeId);
    }

    public function update(Notice $notice, string $title, string $content): void
    {
        $notice->title = $title;
        $notice->content = $content;
        $notice->save();
    }

    public function delete(int $noticeId): void
    {
        Notice::destroy($noticeId);
    }
}
