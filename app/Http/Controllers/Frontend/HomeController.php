<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Team;
use App\Models\posts;
use App\Models\Review;
use App\Models\Newsletter;
use Illuminate\Http\Request;


class HomeController extends Controller
{
   

    public function index(){
        $projects = Project ::latest()->paginate(5);
        $teams = Team::latest()->paginate(5);
        $reviews = Review::latest()->paginate(5);
        $post = posts::all();
        return view('frontend/home',compact('projects','teams','reviews','post'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            // $newsletter_img = new newsletter_img;
            'email' => 'required',

        ]);

        $input = $request->all();
        newsletter::create($input);
        return redirect()->route('home.index')
            ->with('success', 'newsletter created successfully.');
    }

}
