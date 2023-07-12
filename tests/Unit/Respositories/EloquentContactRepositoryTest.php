<?php

namespace Tests\Unit\Repositories;

use App\Models\Contact;
use App\Repositories\EloquentContactRepository;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class EloquentContactRepositoryTest extends TestCase
{
    use Databasemigrations;

    public function testMethodCreateWhenResponseSuccess(): void
    {
        $name = 'foor  Bar';
        $cellPhone = '30045467788';

        $eloquentContactRepository = new EloquentContactRepository();
        $eloquentContactRepository->create($name, $cellPhone );

        $this->assertDatabaseHas('contacts', [
            'name'=> $name,
            'cellPhone'=> $cellPhone
        ]);
    }

    public function testMethodGetAllContactsResponseSuccess():void
    {
        // Dado:
        // ¿Deben existir? bueno, debería existir un número
        // determinado de contactos en tabla de la base de datos
        Contact::create([
            'name' => 'Kennit',
            'cellPhone' => '3044044400'
        ]);

        Contact::create([
            'name' => 'Walter',
            'cellPhone' => '3224458712'
        ]);

        Contact::create([
            'name' => 'Daniel',
            'cellPhone' => '3028873644'
        ]);

        // Cuando:
        $eloquentContactRepository = new EloquentContactRepository();
        $result = $eloquentContactRepository->getAll();

        // Debería:
        $this->assertCount(3, $result);

        $this->assertSame($result[0]->name, 'Kennit');
        $this->assertSame($result[1]->name, 'Walter');
        $this->assertSame($result[2]->name, 'Daniel');
    }

    public function testMethodUpdateContactWhenResponseSuccess(): void
    {
        // Dado el contexto:
        $contactCreated = Contact::create([
            'name' => 'Kennit',
            'cellPhone' => '3045652958'
        ]);

        // Cuando se ejecute:
        $eloquentContactRepository = new EloquentContactRepository();
        $eloquentContactRepository->update(
            $contactCreated,
            'Andrea',
            '3016081310',

        );

        // Debería pasar:
        $this->assertDatabaseHas('contacts', [
            'id' => $contactCreated->id,
            'name' => 'Andrea',
            'cellPhone' => '3016081310'
        ]);

        $this->assertDatabaseMissing('contacts', [
            'id' => $contactCreated->id,
            'name' => 'Kennit',
            'cellPhone' => '3045652958'
        ]);
    }

    public function testMethodDeleteContactWhenResponseSuccess(): void
    {
        // Dado el contexto:
        $contactCreated = Contact::create([
            'name' => 'Pepito',
            'cellPhone' => '3445556789'
        ]);

        // Al ejecutar o cuando se ejecute
        $eloquentContactRepository = new EloquentContactRepository();
        $eloquentContactRepository->delete($contactCreated->id);

        // Debería pasar:
        $this->assertDatabaseMissing('contacts', [
            'id' => $contactCreated->id
        ]);
    }


}


