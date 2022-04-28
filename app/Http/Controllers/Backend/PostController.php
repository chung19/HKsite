<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\posts;

use App\Models\Categories;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\UploadedFile;

use Illuminate\Database\Eloquent\Model;

use Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $post = posts::paginate(2);
        $category = Categories::all();
        // $paginatePost = posts::paginate(2);
        return view('backend/posts.index_post', compact('post','category'));
    }

    public function create()
    {
        $category = Categories::all();
        return view('backend/posts.add_post', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_title' => 'required',
            'post_content' => 'required',
            'post_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:12048',
            'category_id' => 'required',
        ]);

        $post = new posts;
        $post->post_title = $request->input('post_title');
        $post->post_content = $request->input('post_content');
        if($request->hasfile('post_image'))
        {
            $file = $request->file('post_image');
            $file1 = $request->file('post_image');
            $extention = $file->getClientOriginalExtension();

            $filename = time().'.'.$extention;
            $smallthumbnail = 'small_'.time().'.'.$extention;
            $mediumthumbnail = 'medium_'.time().'.'.$extention;
            $largethumbnail = 'large_'.time().'.'.$extention;

            $request->file('post_image')->move('backend/images/', $filename);
            // $request->file('post_image')->move('backend/images/', $smallthumbnail);
            // $request->file('post_image')->move('backend/images/', $mediumthumbnail);
            // $request->file('post_image')->move('backend/images/', $largethumbnail);

            // $smallthumbnailpath = public_path('backend/images/'.$smallthumbnail);
            // $this->createThumbnail($smallthumbnailpath, 80, 80);
            // $mediumthumbnailpath = public_path('backend/images/'.$mediumthumbnail);
            // $this->createThumbnail($mediumthumbnailpath, 100, 100);
            // $largethumbnailpath = public_path('backend/images/'.$largethumbnail);
            // $this->createThumbnail($largethumbnailpath, 250, 210);
            $largethumbnailpath = public_path('backend/images/'.$filename);
            $this->createThumbnail($largethumbnailpath, 250, 210);

            $post->post_image = $filename;
        }
        $post->post_date = $request->input('post_date');
        $change = DB::table('categories')
                        ->where('category_name',$_POST['category_id'])
                        ->first();
        $post -> category_id = $change -> id;
        $post->save();
        return redirect()->back()->with('status','Post Added Successfully');
    }

    public function edit($id)
    {
        $post = posts::find($id);
        $category = Categories::all();
        return view('backend/posts.edit_post', compact('post','category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'post_title' => 'required',
            'post_content' => 'required',
            'category_id' => 'required',
        ]);

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
        $post->post_date = $request->input('post_date');
        $change = DB::table('categories')
                        ->where('category_name',$_POST['category_id'])
                        ->first();
        $post -> category_id = $change->id;

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

    public function createThumbnail($path, $width, $height)
    {
        $img = Image::make($path)->fit($width, $height)->save($path);
    }
}
