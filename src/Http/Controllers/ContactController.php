<?php

namespace patelsujal\contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use patelsujal\contact\Models\Contact;

class ContactController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $contact = New Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;

        if($contact->save())
        {
            return redirect()->route('contactview');
        }
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
