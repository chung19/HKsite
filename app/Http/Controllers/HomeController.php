<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Team;
use App\Models\Blog;
use App\Models\posts;
use App\Models\Review;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        $projects = Project ::latest()->paginate(5);
        $teams = Team::latest()->paginate(5);
        $reviews = Review::latest()->paginate(5);
        $post = posts::all();
        $newsletter = Newsletter::latest()->paginate(5);
        return view('frontend/home',compact('projects','teams','reviews','post','newsletter'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
