<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\posts;

class PostController extends Controller
{
    public function index(){
        $data = array(
            'listposts' => DB::table('posts')->get(),
            'listcategory' => DB::table('categories')->get()
        );
        return view('posts/add_post', $data);
    }

    public function add(Request $request){
        // $request ->validate([
        //     'post_id' =>'required',
        //     'post_tittle' =>'required',
        //     'post_content' =>'required',
        //     'post_image' =>'required',
        //     'category_id' =>'required'
        // ]);

        // $query = DB::table('posts')->insert([
        //     'post_id'=>$request->input('post_id'),
        //     'post_tittle'=>$request->input('post_tittle'),
        //     'post_content'=>$request->input('post_content'),
        //     'post_image'=>$request->input('post_image'),
        //     'category_id'=>$request->input('category_id')
        // ]);

        // if($query){
        //     return back()->with('success','Data have been successfuly inserted');
        // }
        // else{
        //     return back()->with('fail','Something went wrong');
        // }
        $posts = new posts;
        $posts -> post_title = $request->input('post_title');
        $posts -> post_content = $request->input('post_content');
        if($request->hasfile('post_image')){
            $file = $request->file('post_image');
            $filename = time().'.'. $file->getClientOriginalExtension();
            $file->move('frontend/images/servicedetails/', $filename);
            $posts -> post_image = $filename;
        }
        else{
            return redirect()->back()->with('fail','not a file image');
        }
        $posts -> category_id = $request->input('category_id');
        $posts->save();
        return redirect()->back()->with('success','Data have been successfuly inserted');

    }

    public function edit($id){
        $row = DB::table('posts')
                    ->where('post_id',$id)
                    ->first();
        $data = [
            'Info' => $row,
            'Title' => 'Edit'
        ];
        return view('posts/edit_post',$data);
    }

    public function update(Request $request){
        $request ->validate([
            'post_title' =>'required',
            'post_content' =>'required',
            'post_image' =>'required',
            'category_id' =>'required'
        ]);

        $updating = DB::table('posts')
                        ->where('post_id', $request -> input("post_id"))
                        ->update([
                            'post_title'=>$request->input('post_title'),
                            'post_content'=>$request->input('post_content'),
                            'post_image'=>$request->input('post_image'),
                            'category_id'=>$request->input('category_id')
                        ]);

        return redirect('/post');

    }

    public function delete($id){
        $detele = DB::table('posts')
                        ->where('post_id',$id)
                        ->delete();
        return redirect('/post');
    }
}
