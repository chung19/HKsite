<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $projects = Project ::latest()->paginate(5);
    
        return view('home',compact('projects'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
