<?php

namespace App\Http\Controllers\Api\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class UpdateContactController extends Controller
{
    public function updateContact($contactId, Request $request)
    {
        $newName = $request->get('name');
        $newCellPhone = $request->get('cellphone');

        $contact = Contact::find($contactId);
        $contact->name = $newName;
        $contact->cellphone = $newCellPhone;
        $contact->save();

        return response()->json([
            'message' => 'contacto actualizado'
        ]);
    }
}
