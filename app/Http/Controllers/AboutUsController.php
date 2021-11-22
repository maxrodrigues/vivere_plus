<?php

namespace App\Http\Controllers;

use App\Mail\ContactSendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('site.contact-us');
    }

    public function sendMail(Request $request)
    {
        Mail::to('contato@vivereplus.com')->send(new ContactSendMail($request->all()));
        return redirect()->route('contact-us');
    }
}
