<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function allContact()
    {
        $contacts = Contact::all();
        return view('all-contact', compact('contacts'));
    }

    public function saveMessage(Request $request)
    {
        $contact = new Contact();
        $contact->full_name = $request->full_name;
        $contact->email = $request->email_address;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->to('/all-contact');
    }

    public function editContact($id)
    {
        $contact = Contact::find($id);
        return view('edit-contact', compact('contact'));
    }

    public function updateMessage(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->full_name = $request->full_name;
        $contact->email = $request->email_address;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->to('/all-contact');
    }

    public function delete($id)
    {
        Contact::destroy($id);
        return redirect()->to('/all-contact');
    }
}
