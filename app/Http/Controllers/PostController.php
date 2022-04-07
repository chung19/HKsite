<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\posts;

use App\Models\Categories;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $post = posts::all();
        $category = Categories::all();
        return view('posts.index_post', compact('post','category'));
    }

    public function create()
    {
        $category = Categories::all();
        return view('posts.add_post', compact('category'));
    }

    public function store(Request $request)
    {
        $post = new posts;
        $post->post_title = $request->input('post_title');
        $post->post_content = $request->input('post_content');
        if($request->hasfile('post_image'))
        {
            $file = $request->file('post_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('backend/images/', $filename);
            $post->post_image = $filename;
        }
        $change = DB::table('categories')
                        ->where('category_name',$_POST['Category'])
                        ->first();
        $post -> category_id = $change->category_id;
        $post->save();
        return redirect()->back()->with('status','Post Added Successfully');
    }

    public function edit($id)
    {
        $post = posts::find($id);
        $category = Categories::all();
        return view('posts.edit_post', compact('post','category'));
    }

    public function update(Request $request, $id)
    {
        $post = posts::find($id);
        $post->post_title = $request->input('post_title');
        $post->post_content = $request->input('post_content');

        if($request->hasfile('post_image'))
        {
            $destination = 'backend/images/'.$post->post_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('post_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('backend/images/', $filename);
            $post->post_image = $filename;
        }

        $change = DB::table('categories')
                        ->where('category_name',$_POST['Category'])
                        ->first();
        $post -> category_id = $change->category_id;

        $post->update();
        return redirect()->back()->with('status','Post Updated Successfully');
    }

    public function destroy($id)
    {
        $post = posts::find($id);
        $destination = 'backend/images/'.$post->post_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $post->delete();
        return redirect()->back()->with('status','Post Deleted Successfully');
    }













    // public function index(){
    //     // $data = array(
    //     //     'listposts' => DB::table('posts')->get(),
    //     //     'listcategory' => DB::table('categories')->get()
    //     // );
    //     // return view('posts/add_post', $data);
    //     $post = posts::all();
    //     $category = Category::all();
    //     return view('posts/add_post', compact('posts','category'));
    // }

    // public function add(Request $request){
    //     // $request ->validate([
    //     //     'post_id' =>'required',
    //     //     'post_tittle' =>'required',
    //     //     'post_content' =>'required',
    //     //     'post_image' =>'required',
    //     //     'category_id' =>'required'
    //     // ]);

    //     // $query = DB::table('posts')->insert([
    //     //     'post_id'=>$request->input('post_id'),
    //     //     'post_tittle'=>$request->input('post_tittle'),
    //     //     'post_content'=>$request->input('post_content'),
    //     //     'post_image'=>$request->input('post_image'),
    //     //     'category_id'=>$request->input('category_id')
    //     // ]);

    //     // if($query){
    //     //     return back()->with('success','Data have been successfuly inserted');
    //     // }
    //     // else{
    //     //     return back()->with('fail','Something went wrong');
    //     // }
    //     $posts = new posts;
    //     $posts -> post_title = $request->input('post_title');
    //     $posts -> post_content = $request->input('post_content');
    //     if(1==1){
    //         $file = $request->file('post_image');
    //         $filename = time().'.'. $file->getClientOriginalExtension();
    //         $file->move('backend/images/', $filename);
    //         $posts -> post_image = $filename;
    //     }
    //     else{
    //         return redirect()->back()->with('fail','not a file image');
    //     }
    //     $change = DB::table('categories')
    //                     ->where('category_name',$_POST['Category'])
    //                     ->first();
    //     $posts -> category_id = $change->category_id;
    //     $posts->save();
    //     return redirect()->back()->with('success','Data have been successfuly inserted');

    // }

    // public function edit($id){
    //     $data1 = array(
    //         'listposts' => DB::table('posts')->get(),
    //         'listcategory' => DB::table('categories')->get()
    //     );
    //     $row = DB::table('posts')
    //                 ->where('post_id',$id)
    //                 ->first();
    //     $data = [
    //         'Info' => $row,
    //         'Title' => 'Edit'
    //     ];
    //     return view('posts/edit_post',$data, $data1);
    // }

    // // public function update(Request $request){
    //     // $request ->validate([
    //     //     'post_title' =>'required',
    //     //     'post_content' =>'required',
    //     //     'post_image' =>'required',
    //     //     'category_id' =>'required'
    //     // ]);

    //     // $updating = DB::table('posts')
    //     //                 ->where('post_id', $request -> input("post_id"))
    //     //                 ->update([
    //     //                     'post_title'=>$request->input('post_title'),
    //     //                     'post_content'=>$request->input('post_content'),
    //     //                     'post_image'=>$request->input('post_image'),
    //     //                     'category_id'=>$request->$_POST['Category']
    //     //                 ]);

    //     // return redirect('/post');

    // // }

    // public function update(Request $request, $id)
    // {
    //     // $posts = posts::find($id);
    //     // $posts = DB::table('posts')
    //     //             ->where('post_id',$id)
    //     //             ->first();

    //     // $posts -> post_title = $request->input('post_title');
    //     // $posts -> post_content = $request->input('post_content');

    //     // if($request->hasfile('post_image')){
    //     //     $destination = 'backend/images/'.$posts->post_image;
    //     //     if(File::exits($destination)){
    //     //         File::delete($destination);
    //     //     }
            
    //     //     $filename = time().'.'. $file->getClientOriginalExtension();
    //     //     $file->move('backend/images/', $filename);
    //     //     $posts -> post_image = $filename;
    //     // }
    //     // $file = $request->file('post_image');
    //     // $change = DB::table('categories')
    //     //                 ->where('category_name',$_POST['Category'])
    //     //                 ->first();
    //     // $posts -> category_id = $change->category_id;
    //     // $posts->update();
    //     // return redirect()->back()->with('success','Data have been successfuly updated');


    //     // $input = $request->all();
    //     // $posts = new posts;
    //     // if($image = $request->hasfile('post_image'))
    //     //     echo "true";
    //     // else
    //     //     echo "false";

    //     // if ($image = $request->hasfile('post_image')) {
    //     //     return view('posts/add_post');
    //     //     $destinationPath = 'backend/images/' . $posts->image;
    //     //     if (File::exists($destinationPath)) {
    //     //         File::delete($destinationPath);
    //     //     }
    //     //     $profileImage = time() . "." . $image->getClientOriginalExtension();
    //     //     $image->move('backend/images/', $profileImage);
    //     //     $input['post_image'] = "$profileImage";
    //     // } else {
    //     //     return view('/');
    //     //     unset($input['post_image']);
    //     // // }

    //     // $posts->update($input);

    //     // return redirect()->back()->with('success','Data have been successfuly updated');


    //     $posts = DB::table('posts')
    //                 ->where('post_id',$id)
    //                 ->first();
    //     $change = DB::table('categories')
    //                     ->where('category_name',$_POST['Category'])
    //                     ->first();
    //     if($request->hasfile('post_image')){
    //         $destination = '/backend/images/'.$posts->post_image;
    //         if(File::exits($destination)){
    //             File::delete($destination);
    //         }
    //         $file = $request->file('post_image');
    //         $filename = time().'.'. $file->getClientOriginalExtension();
    //         $file->move('backend/images/', $filename);
    //         $posts -> post_image = $filename;
    //     }
    //     else
    //         $filename = 'sai me roi';
    //     $updating = DB::table('posts')
    //                     ->where('post_id', $request -> input("post_id"))
    //                     ->update([
    //                         'post_title'=>$request->input('post_title'),
    //                         'post_content'=>$request->input('post_content'),
    //                         'post_image'=>$filename,
    //                         'category_id'=>$change->category_id
    //                     ]);
    //     return redirect('/post');
    // }

    // public function delete($id){
    //     $detele = DB::table('posts')
    //                     ->where('post_id',$id)
    //                     ->delete();
    //     return redirect('/post');
    // }
}
