<?php

namespace App\Console\Commands;

use App\Models\Contact;
use App\Repositories\EloquentContactRepository;
use Illuminate\Console\Command;

class ListContactsCommand extends Command
{
    protected $signature = 'app:list-contacts-command';
    protected $description = 'Command description';

    public function handle()
    {
        /*$contacts = Contact::all();
        for ($i = 0; $i < sizeof($contacts); $i++) {
            $this->info($contacts[$i]->id);
            $this->warn($contacts[$i]->name);
            $this->error($contacts[$i]->cellPhone);
            $this->line('---------------------');
        }*/
        $contactRepository = new EloquentContactRepository();
        $contact = $contactRepository->getAll();


        $this->table(
            ['#id', 'name', 'cellPhone'],
            $contact
        );
    }
}
