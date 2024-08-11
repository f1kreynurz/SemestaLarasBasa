<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Simpan data ke dalam database
        Contact::create($request->all());

        // Mengembalikan respon JSON
        return response()->json(['success' => true, 'message' => 'Your message has been sent successfully!']);
    }

}
