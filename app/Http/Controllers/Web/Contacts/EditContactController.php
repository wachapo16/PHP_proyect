<?php

namespace App\Http\Controllers\Web\Contacts;

use App\Models\Contact;

    class EditContactController
    {
        public function __invoke(int $contactId)
        {
            $contacts = Contact::find($contactId);
            return view('contacts.edit', [
                'contacts' => $contacts
            ]);
        }
    }
