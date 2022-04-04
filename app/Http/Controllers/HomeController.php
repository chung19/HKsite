<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class HomeController extends Controller
{
    public function index(){
        $reviews = Review::latest()->paginate(5);

        return view('home',compact('reviews'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
