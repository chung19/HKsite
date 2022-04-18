<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\posts;
use App\Models\Newsletter;
use App\Models\Categories;
use App\Models\Photo;

class ArticleListController extends Controller
{
    public function index(){
        $recent = posts::latest()->paginate(3);
        $post = posts::paginate(2);
        $category = Categories::all();
        $randPhoto = Photo::inRandomOrder()->limit(6)->get();
        return view('frontend/articleList', compact('post','category','randPhoto','recent'));
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
