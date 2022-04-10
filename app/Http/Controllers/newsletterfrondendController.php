<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Newsletter;
use Mail;
// use Illuminate\Support\Facades\Mail;
class NewsletterfrondendController extends Controller {
    // Create Contact Form
    public function createNewsletter(Request $request) {
      return view('home');
    }
    // Store Contact Form data
    public function newsletterForm(Request $request) {
        // dd($request->all());die();
        // Form validation
        $this->validate($request, [
            
            'email' => 'required|email',
           
        
         ]);
        }
        //  Store data in database
        // home::create($request->all());
    
      
       
}