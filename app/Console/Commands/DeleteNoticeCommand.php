<?php

namespace App\Console\Commands;

use App\Models\Notice;
use App\Repositories\EloquentNoticeRepository;
use Illuminate\Console\Command;

class DeleteNoticeCommand extends Command
{

    protected $signature = 'app:delete-notice-command';
    protected $description = 'Eliminar Noticias';
    public function handle()
    {

        $noticeId = $this->ask('Ingrese el ID del aviso a eliminar:');
        
        
        $noticeRepository = new EloquentNoticeRepository();
        $deleted = $noticeRepository-> delete($noticeId);
        //$deleted = Notice::destroy($noticeId);

        if ($deleted) {
            $this->info('Aviso eliminado correctamente.');
        } else {
            $this->error('No se encontró el Aviso con el ID proporcionado.');
        }
    }
    
}
