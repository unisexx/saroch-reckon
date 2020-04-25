<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

use App\Http\Requests\ContactRequest;
use App\Message;

use App;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::with('translations')->firstOrFail()->translate(App::getLocale());
        return view('contact', compact('contact'));
    }

    public function save(ContactRequest $request)
    {
        $requestData = $request->all();
        Message::create($requestData);

        set_notify('success', 'ส่งข้อความเรียบร้อย');
        return back();
    }
}
