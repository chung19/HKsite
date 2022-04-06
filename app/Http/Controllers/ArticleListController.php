<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

<<<<<<< HEAD
use Illuminate\Support\Facades\DB;

use App\Models\posts;

use App\Models\Categories;

class ArticleListController extends Controller
{
    public function index(){
        $post = posts::all();
        $category = Categories::all();
        return view('articleList', compact('post','category'));
    }
=======
class ArticleListController extends Controller
{

>>>>>>> 8826cc43e3bd56f361f6963bfc063e40fdba5063
}
