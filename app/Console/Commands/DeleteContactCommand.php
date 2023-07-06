<?php

namespace App\Console\Commands;

use App\Models\Contact;
use App\Repositories\EloquentContactRepository;
use Illuminate\Console\Command;

class DeleteContactCommand extends Command
{
    protected $signature = 'app:delete-contact-command';
    protected $description = 'Command description';

    public function handle()
    {
        $contactId = $this->ask('Ingrese el ID del contacto a eliminar:');
        
        $contactRepository = new EloquentContactRepository();
        $deleted = $contactRepository-> delete($contactId);

        if ($deleted) {

            $this->info('Contacto eliminado correctamente.');
        } else {
            $this->error('No se encontró el contacto con el ID proporcionado.');
        }
    }
}
