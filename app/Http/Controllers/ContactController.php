<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller\newsletterController;
use App\Models\contact;
use App\Models\newsletter;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend/contact');
    }
}
