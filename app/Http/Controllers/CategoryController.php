<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        $data = array(
            'list' => DB::table('categories')->get()
        );
        return view('category/add_categories', $data);
    }

    public function add(Request $request){
        echo "false";
        $request ->validate([
            'category_id' =>'required',
            'category_name' =>'required'
        ]);

        $query = DB::table('categories')->insert([
            'category_id'=>$request->input('category_id'),
            'category_name'=>$request->input('category_name')
        ]);

        if($query){
            return back()->with('success','Data have been successfuly inserted');
        }
        else{
            return back()->with('fail','Something went wrong');
        }

    }

    public function edit($id){
        $row = DB::table('categories')
                    ->where('category_id',$id)
                    ->first();
        $data = [
            'Info' => $row,
            'Title' => 'Edit'
        ];
        return view('category/edit_categories',$data);
    }

    public function update(Request $request){
        $request -> validate([
            'category_id'=>'required',
            'category_name'=>'required'
        ]);

        $updating = DB::table('categories')
                        ->where('category_id', $request -> input("category_id"))
                        ->update([
                            'category_name'=>$request->input('category_name')
                        ]);

        return redirect('/category-post');

    }

    public function delete($id){
        $detele = DB::table('categories')
                        ->where('category_id',$id)
                        ->delete();
        return redirect('/category-post');
    }

}
