<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Team;
use App\Models\Blog;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $projects = Project ::latest()->paginate(5);
        $teams = Team::latest()->paginate(4);
        $reviews = Review::latest()->paginate(5);
        return view('home',compact('projects'),compact('teams'),compact('reviews'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
