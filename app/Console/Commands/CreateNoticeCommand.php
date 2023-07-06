<?php

namespace App\Console\Commands;

use App\Models\Notice;
use App\Repositories\EloquentNoticeRepository;
use Illuminate\Console\Command;

class CreateNoticeCommand extends Command
{
    protected $signature = 'app:create-notice-command';
    protected $description = 'Este comando permite crear avisos';

    public function handle()
    {
        $this->info('CREANDO UN AVISO');
        $title = $this->ask('Ingrese el título: ');
        $content = $this->ask('Ingrese el contenido: ');
        
        $noticeRepository = new EloquentNoticeRepository();
        $noticeRepository->create([
            'title' => $title,
            'content' => $content
        ]);
        $this->info('Aviso creado');
    }
}
