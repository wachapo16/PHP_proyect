<?php

namespace App\Http\Controllers\Web\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class UpdateContactController extends Controller
{
    public function __invoke(int $contactId, Request $request)
    {
        $newName = $request->get('name');
        $newCellPhone = $request->get('cellPhone');
        $contacts = Contact::find($contactId);
        $contacts->name = $newName;
        $contacts->cellPhone = $newCellPhone;
        $contacts->save();
        return redirect('contacts');
    }
}