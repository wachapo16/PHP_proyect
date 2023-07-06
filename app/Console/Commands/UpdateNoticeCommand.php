<?php

namespace App\Console\Commands;

use App\Models\Notice;
use App\Repositories\EloquentNoticeRepository;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateNoticeCommand extends Command
{

    protected $signature = 'app:update-notice-command';
    protected $description = 'Actualizar Notice';

    public function handle()
    {
        $noticeId = $this->ask('Ingrese el ID del aviso a actualizar:');
        $noticeRepository = new EloquentNoticeRepository();
        
        try {
            $notice = $noticeRepository->findById($noticeId);

            $title = $this->ask('Ingrese el nuevo titulo:');
            $content = $this->ask('Ingrese el nuevo contenido:');

            $noticeRepository->update($notice,$title, $content);
             $this->info('Noticia actualizado correctamente.');   
        } catch(ModelNotFoundException $exception) {
            $this->error('No se encontró la noticia con el ID proporcionado.');
        }
    }
}
