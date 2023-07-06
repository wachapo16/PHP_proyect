<?php

namespace App\Console\Commands;

use App\Repositories\EloquentContactRepository;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;

class UpdateContactCommand extends Command
{

    protected $signature = 'app:update-contact-command';
    protected $description = 'Actualizar Contactos';

    public function handle()
    {
        $contactId = $this->ask('Ingrese el ID del contacto a actualizar:');
        $contactRepository = new EloquentContactRepository();
        
        try {
            $contact = $contactRepository->findById($contactId);

            $name = $this->ask('Ingrese el nuevo nombre:');
            $cellPhone = $this->ask('Ingrese el nuevo número de celular:');

            $contactRepository->update($contact,$name, $cellPhone);
             $this->info('Contacto actualizado correctamente.');   
        } catch(ModelNotFoundException $exception) {
            $this->error('No se encontró el contacto con el ID proporcionado.');
        }

       
    }
}
