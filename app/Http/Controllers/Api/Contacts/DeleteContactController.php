<?php

namespace App\Http\Controllers\Api\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class DeleteContactController extends Controller
{
    public function deleteContact($contactId)
    {
        Contact::destroy($contactId);

        return response()->json([
            'message' => 'Aviso eliminado'
        ]);
    }
}
