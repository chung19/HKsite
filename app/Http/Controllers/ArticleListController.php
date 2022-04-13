<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\posts;
use App\Models\Newsletter;
use App\Models\Categories;

class ArticleListController extends Controller
{
    public function index(){
        $post = posts::all();
        $category = Categories::all();
        $randPost = posts::inRandomOrder()->limit(2)->get();
        return view('frontend/articleList', compact('post','category','randPost'));
    }
    public function store(Request $request)
    {

        $request->validate([
            // $newsletter_img = new newsletter_img;
            'email' => 'required',

        ]);

        $input = $request->all();
        newsletter::create($input);
        return redirect()->route('articleList.index')
            ->with('success', 'newsletter created successfully.');
    }

}
