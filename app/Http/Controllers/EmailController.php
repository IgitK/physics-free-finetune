<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use App\Mail\ClassJoinRequestMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function sendContactEmail(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string|regex:/^[0-9]{10}$/',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'string',
        ]);


        Mail::to('your@email.com')->send(new ContactFormMail($data));
        return redirect()->back()->with(session('success', 'Email sent successfully'));

    }

}