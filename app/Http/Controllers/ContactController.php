<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.contact');
    }
    public function store(Request $request)
    {

        $request->validate([
            // $newsletter_img = new newsletter_img;
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required',

        ]);

        $input = $request->all();
        Contact::create($input);
        return redirect()->route('contact.index')
            ->with('success', 'contact created successfully.');
 
    Contact::create($request->all());
     //  Send mail to admin
        \Mail::send('backend.mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ),
         function($message) use ($request){
            $message->from($request->email);
            $message->to('hoangkhangsuport@gmail.com', 'Admin Support HK site')->subject($request->get('subject'));
        });
        return back()->withErrors(['success' => 'We have received your message and would like to thank you for writing to us.']);
    }

}
