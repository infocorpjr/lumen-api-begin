<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use Illuminate\Http\Request;

class BriefController extends Controller
{

    public function index()
    {
        $contact = Brief::all();
        return response()->json($contact);
    }

    public function show($id)
    {
        return response()->json(Contact::find($id));
    }

    public function create(Request $request)
    {
        return [
            'nome' => 'required|max:255',
            'trabalho' => 'required|max:255',
            'email' => 'required',
            'telefone' => 'required'
        ];

        $this->validate($request, $rules);

        $Contact = Brief::create($request->all());

        return response()->json($Contact, 201);
    }

}