<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller {

    public function submit(ContactRequest $req) {
        
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success','Сообщение добавлено в БД');

    }

    public function allData() {

        $contact = new Contact;   
        return view('messages', ['data' => $contact->all()]);

    }

    public function showOneMessage($id) {

        $contact = new Contact;
        return view('one-message', ['data' => $contact->find($id)]);

    }

    public function updateOneMessage($id) {

        $contact = new Contact;
        return view('one-message-update', ['data' => $contact->find($id)]);

    }

    public function updateOneMessageSubmit($id, ContactRequest $req) {
        
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success','Сообщение отредактировано');

    }

    public function deleteOneMessageSubmit ($id) {

        $contact = Contact::find($id);
        $contact->delete();

        return redirect()->route('contact-data')->with('success','Сообщение удалено');

    }

}
