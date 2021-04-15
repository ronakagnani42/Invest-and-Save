<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact-us');
    }    

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg
        ];

        Mail::to('drashti.pbhingradiya@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','Thank You! Your message has been sent successfully.');
    }
}
