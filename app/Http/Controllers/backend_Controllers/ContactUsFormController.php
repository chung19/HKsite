<?php
namespace App\Http\Controllers\backend_Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
// use Illuminate\Support\Facades\Mail;
class ContactUsFormController extends Controller {
    // Create Contact Form
    public function createForm(Request $request) {
      return view('contact');
    }
    public function getAddress()
{
      $getSelectOptions = Input::get('address');
}
    // Store Contact Form data
    public function ContactUsForm(Request $request) {
        // dd($request->all());die();
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required',
            "address"=>'required'
         ]);
        //  Store data in database
        Contact::create($request->all());
        //  Send mail to admin
        \Mail::send('backend.mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
            'address' => $request->get('address')
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('nvchung1412191@gmail.com', 'gg14121999')->subject($request->get('subject'));
        });
        return back()->withErrors(['success' => 'We have received your message and would like to thank you for writing to us.']);
    }
}