<?php

namespace App\Repositories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;


class EloquentContactRepository
{
    public function getAll(): Collection
    {
        return Contact::all(['id', 'name', 'cellPhone']);
    }

    public function create(array $attributes): Contact
    {
        return Contact::create($attributes);
    }

    public function findById(int $contactId): Contact 
    {
        return Contact::findOrFail($contactId);
    }

    public function update(Contact $contact, string $name, string $cellPhone): void
    {
        $contact->name = $name;
        $contact->cellPhone = $cellPhone;
        $contact->save();
    }

    public function delete(int $contactId): bool
    {
       return Contact::destroy($contactId);
    }
}