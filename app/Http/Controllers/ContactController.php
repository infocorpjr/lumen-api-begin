<?php

namespace App\Http\Controllers;


use App\Model\Contact;
use Illuminate\Http\Request\ContactStoreRequest;

class ContactController extends Controller
{

    public function index()
    {
        $contact = Contact::all();
        return response()->json($contact);
    }

    public function show($id)
    {
        return response()->json(Author::find($id));
    }

    public function create(ContactStoreRequest $request)
    {
        $author = Author::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, ContactStoreRequest $request)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Author::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

}