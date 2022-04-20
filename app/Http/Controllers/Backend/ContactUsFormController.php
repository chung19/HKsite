<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
// use Illuminate\Support\Facades\Mail;
class ContactUsFormController extends Controller {
    // Create Contact Form
    public function createForm(Request $request) {
      return view('frontend.contact');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request)
    {
        // dd($request->all());die();
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:10',
            'subject'=>'required',
            'message' => 'required',

         ]);
        // //  Store data in database

        Contact::create($request->all());

        // $input = $request->all();
        // Contact::create($input);
        // return redirect()->route('contact')
        //     ->with('success', 'Contact created successfully.');
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
            $message->to('luanpm88@gmail.com', 'Admin Support HK site')->subject($request->get('subject'));
        });
        // return back()->withErrors(['success' => 'We have received your message and would like to thank you for writing to us.']);
        return redirect()->route('contact.store')
        ->with('success', 'Contact created successfully.');
    }
}
