<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone_number' => 'required|string|max:255',
        'lead_business_name' => 'nullable|string|max:255',
        'msg' => 'nullable|string',
    ]);

    // Prepare the data for the email
    $contactData = [
        'full_name' => $request->input('full_name'),
        'email' => $request->input('email'),
        'phone_number' => $request->input('phone_number'),
        'lead_business_name' => $request->input('lead_business_name'),
        'msg' => $request->input('msg'),
    ];

    // Send the email
    Mail::to("mrashid2000@gmail.com")->send(new ContactMail($contactData));

    return redirect()->route('aboutus', ['#sentmessage'])->with('info', 'Your message has been sent successfully!');
}

}
