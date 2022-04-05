<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ArticleListController extends Controller
{
    public function index(){
        $data = array(
            'list' => DB::table('categories')->get()
        );
        return view('articleList', $data);
    }
}
