<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Websitemail;
use App\Models\Admin;
use App\Models\PageContactItem;

class ContactController extends Controller
{
    public function index() 
    {
        $contact_page_item = PageContactItem::where('id',1)->first();
        return view('front.contact', compact('contact_page_item'));
    }

    public function submit(Request $request)
    {
        $admin_data = Admin::where('id',1)->first();

        $request->validate([
            'person_name' => 'required',
            'person_email' => 'required|email',
            'person_message' => 'required'
        ]);

        $subject = 'Contact Form Message';
        $message = 'Visitor Information: <br>';
        $message .= 'Name: '.$request->person_name.'<br>';
        $message .= 'Email: '.$request->person_email.'<br>';
        $message .= 'Message: '.$request->person_message;

        \Mail::to($admin_data->email)->send(new Websitemail($subject,$message));

        return redirect()->back()->with('success', 'Email is sent successfully! We will contact you soon.');

    }
}
