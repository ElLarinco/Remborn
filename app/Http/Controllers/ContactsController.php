<?php

namespace App\Http\Controllers;

use App\Mail\ContactsMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function index() {
        return view("contacts.index");
    }

    public function store(Request $request) {
        $msg = request() -> validate([
            "name" => "required",
            "email" => "required|email",
            "subject" => "required",
        ]);

        Mail::to("kochisito99@gmail.com")->queue(new ContactsMailable($msg));

        return redirect()->route("contacts.index")->with("info", "Mensaje enviado");
    }
}
