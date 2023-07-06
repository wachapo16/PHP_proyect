<?php

namespace App\Console\Commands;

use App\Models\Contact;
use App\Repositories\EloquentContactRepository;
use Illuminate\Console\Command;

class CreateContactsCommand extends Command
{
    protected $signature = 'app:create-contacts-command';
    protected $description = 'Command description';

    public function handle()
    {
        $this->info('CREANDO UN CONTACTO');
        $name = $this->ask('Ingrese el nombre: ');
        $cellPhone = $this->ask('Ingrese el número de Celular: ');

        $contactRepository = new EloquentContactRepository();
        $contactRepository->create([
            'name' => $name,
            'cellPhone' => $cellPhone
         ]);

        $this->info('Contact created');
    }
}
