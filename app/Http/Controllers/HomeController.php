<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Team;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $projects = Project ::latest()->paginate(5);
        $teams = Team::latest()->paginate(4);
    
        return view('home',compact('projects'),compact('teams'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
