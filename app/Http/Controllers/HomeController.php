<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\posts;

class HomeController extends Controller
{
    public function showHome(){
        return view('home');
    }
}
