<?php

namespace App\Http\Controllers\Web\Contacts;

use App\Models\Contact;
use Illuminate\Http\Request;

class StoreContactController
{
    public function __invoke(Request $request)
    {
        $name = $request->get('name');
        $cellPhone = $request->get('cellPhone');

        Contact::create([
            'name' => $name,
            'cellPhone' => $cellPhone,
        ]);

        return redirect('contacts');
    }
}
