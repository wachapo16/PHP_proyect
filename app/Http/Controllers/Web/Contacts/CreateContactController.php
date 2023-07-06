<?php

namespace App\Http\Controllers\Web\Contacts;

class CreateContactController
{
    public function __invoke()
    {
        return view('contacts.create');
    }
}