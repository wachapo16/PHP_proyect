<?php

namespace App\Console\Commands;

use App\Repositories\EloquentNoticeRepository;
use Illuminate\Console\Command;

class ListNoticesCommand extends Command
{
    protected $signature = 'app:list-notices-command';
    protected $description = 'Leer todos los avisos';
    public function handle()
    {
        //$notices = Notice::all();
        $noticeRepository = new EloquentNoticeRepository();
        $notices = $noticeRepository->getAll();

        foreach ($notices as $notice) {
            $this->info($notice->id);
            $this->warn($notice->title);
            $this->error($notice->content);
            $this->line('---------------------');
        }
    }
}
