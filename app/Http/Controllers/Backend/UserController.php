<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\UserEmail;
use Mail;
class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = Contact::select("*")
                        ->paginate(10);

        return view('backend.emails.users', compact('users'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function sendEmail(Request $request)
    {
        $users = Contact::whereIn("id", $request->ids)->get();

        foreach ($users as $key => $user) {
            Mail::to($user->email)->send(new UserEmail($user));
        }

        return response()->json(['success'=>'Send email successfully.']);
    }
}
