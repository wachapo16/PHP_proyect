<?php

namespace App\Http\Controllers\Api\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class CreateContactController extends Controller
{
    public function createContact(Request $request)
    {
        $name = $request->get('name');
        $cellPhone = $request->get('cellPhone');
        Contact::create([
            'name' => $name,
            'cellPhone' => $cellPhone
        ]);
        return response()->json([
            'message' => 'Contacto creado.'
        ]);
    }
}
