<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('admin_panel.Home.contact', compact('contacts'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'sender_name' => 'required',
            'sender_email' => 'required|email',
            'sender_phone' => 'required',
            'sender_subject' => 'required',
            'sender_message' => 'required',


        ]);

        $record = Contact::create([
            'sender_name' => $request->sender_name,
            'sender_email' => $request->sender_email,
            'sender_phone' => $request->sender_phone,
            'sender_subject' => $request->sender_subject,
            'sender_message' => $request->sender_message,
        ]);

        if ($record) {
            $data = $request->only([
                'sender_name',
                'sender_email',
                'sender_phone',
                'sender_subject',
                'sender_message',
            ]);

            try {
                Mail::to('stylishmonster429@gmail.com')->send(new contactFormMail($data));
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Message saved but failed to send email.');
            }
        }

        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
