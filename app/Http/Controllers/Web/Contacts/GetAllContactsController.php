<?php

namespace App\Http\Controllers\Web\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;


class GetAllContactsController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::all(['id', 'name', 'cellphone']);
        return view('contacts.index', [
            'contacts' => $contacts
        ]);
    }
}
