<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Team;
use App\Models\Blog;
use App\Models\Review;
use Illuminate\Http\Request;

use App\Models\posts;

class HomeController extends Controller
{
    public function index(){
        $projects = Project ::latest()->paginate(5);
        $teams = Team::latest()->paginate(4);
        $reviews = Review::latest()->paginate(5);
        $blogs = Blog::latest()->paginate(3);
        return view('home',compact('projects','teams','reviews','blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
