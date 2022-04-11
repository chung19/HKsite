<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\posts;

use App\Models\Categories;

class ArticleListController extends Controller
{
    public function index(){
        $post = posts::all();
        $category = Categories::all();
        return view('frontend/articleList', compact('post','category'));
    }
}
