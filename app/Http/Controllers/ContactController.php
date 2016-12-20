<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // home 
    public function index() {
        return view('viewtech.pages.contact');
    }

    // create
    public function createContact() {
    	//
    }

    // store
    public function storeContact(Request $request) {
    	
        $contact['name'] = $request->input('author');         
        $contact['email'] = $request->input('email');
        $contact['subject'] = $request->input('subject');
        $contact['reference'] = 0;
        $contact['subject'] = $request->input('subject');
        $contact['service'] = $request->input('services');
        $contact['message'] = $request->input('comment');        

        // creating contact
        Contact::create($contact);

        // set session
        Session::flash('message',' your comments has been sent successfully.');

        // Redirecting.................
        return redirect('/contact');
    }

    // show
    public function showContact($id) {
        //
    }

    // edit
    public function editContact($id) {
        //
    }

    // update
    public function updateContact(Request $request, $id) {
        //
    }

    // destroy
    public function destroyContact($id) {
        //
    }
}
