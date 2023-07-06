<?php

namespace App\Http\Controllers\Web\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class DeleteContactController extends Controller
{
    public function __invoke(int $contactId)
    {
        $contacts = Contact::find($contactId);
        $contacts->delete();
        return redirect('contacts');
    }
}
