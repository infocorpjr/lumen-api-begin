<?php

namespace App\Http\Controllers;

use App\Model\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contact = Contact::all();
        return response()->json($contact);
    }

    public function show($id)
    {
        return response()->json(Contact::find($id));
    }

    public function create(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'subject' => 'required'
        ];

        $this->validate($request, $rules);

        $Contact = Contact::create($request->all());

        return response()->json($Contact, 201);
    }

    public function update($id, Request $request)
    {
        $Contact = Contact::findOrFail($id);
        $Contact->update($request->all());

        return response()->json($Contact, 200);
    }

    public function delete($id)
    {
        Contact::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

}