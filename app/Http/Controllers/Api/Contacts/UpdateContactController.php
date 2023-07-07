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
        $newCellPhone = $request->get('cellPhone');

        $contacts = Contact::find($contactId);
        $contacts->name = $newName;
        $contacts->cellphone = $newCellPhone;
        $contacts->save();

        return response()->json([
            'message' => 'Aviso actualizado'
        ]);
    }
}
