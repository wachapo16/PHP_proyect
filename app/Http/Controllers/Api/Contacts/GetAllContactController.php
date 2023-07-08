<?php

namespace App\Http\Controllers\Api\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class GetAllContactController extends Controller
{
    public function getContact()
    {
        $contacts = Contact::all(['id', 'name', 'cellphone']);
        return response()->json($contacts);
    }
}
