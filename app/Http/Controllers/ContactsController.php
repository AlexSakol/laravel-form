<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
use App\Models\ContactsModel;

class ContactsController extends Controller
{
    public function submit(ContactsRequest $request){
        $contact = new ContactsModel();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('contacts')->with('success', 'Сообщение успешно добавлено');
    }

    public function GetData (){
        return view('contacts_all', ['data' => ContactsModel::all()]);
    }

    public function edit_message ($id){
        $contact = new ContactsModel();
        $message = $contact->find($id);
        return view("edit_message_form", ['message' => $message]);
    }

    public function edit_message_submit ($id, ContactsRequest $request){
        $contact = ContactsModel::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('contacts-all');
    }

    public function delete_message($id){
        $contact = new ContactsModel();
        $contact->find($id)->delete();
        return redirect()->route('contacts-all');
    }
}
