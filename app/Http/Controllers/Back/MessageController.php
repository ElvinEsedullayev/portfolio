<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class MessageController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();
        return view('back.message',compact('contacts'));
    }

    public function goster($id)
    {
        $contact = Contact::find($id);
        return view('back.message_goster',compact('contact'));
    }
}
