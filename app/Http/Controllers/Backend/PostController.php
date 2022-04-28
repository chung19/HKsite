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
            $extention = $file->getClientOriginalExtension();

            $filename = time().'.'.$extention;
            $smallthumbnail = 'small_'.time().'.'.$extention;
            $mediumthumbnail = 'medium_'.time().'.'.$extention;
            $largethumbnail = 'large_'.time().'.'.$extention;

            $file->storeAs('public/images', $filename);
            $file->storeAs('public/images/thumbnail', $smallthumbnail);
            $file->storeAs('public/images/thumbnail', $mediumthumbnail);
            $file->storeAs('public/images/thumbnail', $largethumbnail);

            $smallthumbnailpath = public_path('storage/images/thumbnail/'.$smallthumbnail);
            $this->createThumbnail($smallthumbnailpath, 80, 80);
            $mediumthumbnailpath = public_path('storage/images/thumbnail/'.$mediumthumbnail);
            $this->createThumbnail($mediumthumbnailpath, 100, 100);
            $largethumbnailpath = public_path('storage/images/thumbnail/'.$largethumbnail);
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
            $destination = 'storage/images/'.$post->post_image;
            $destination1 = 'storage/images/thumbnail/large_'.$post->post_image;
            $destination2 = 'storage/images/thumbnail/small_'.$post->post_image;
            $destination3 = 'storage/images/thumbnail/medium_'.$post->post_image;
            if(File::exists($destination))
            {
                File::delete($destination);
                File::delete($destination1);
                File::delete($destination2);
                File::delete($destination3);
            }

            $file = $request->file('post_image');
            $extention = $file->getClientOriginalExtension();

            $filename = time().'.'.$extention;
            $smallthumbnail = 'small_'.time().'.'.$extention;
            $mediumthumbnail = 'medium_'.time().'.'.$extention;
            $largethumbnail = 'large_'.time().'.'.$extention;

            $file->storeAs('public/images', $filename);
            $file->storeAs('public/images/thumbnail', $smallthumbnail);
            $file->storeAs('public/images/thumbnail', $mediumthumbnail);
            $file->storeAs('public/images/thumbnail', $largethumbnail);

            $smallthumbnailpath = public_path('storage/images/thumbnail/'.$smallthumbnail);
            $this->createThumbnail($smallthumbnailpath, 80, 80);
            $mediumthumbnailpath = public_path('storage/images/thumbnail/'.$mediumthumbnail);
            $this->createThumbnail($mediumthumbnailpath, 100, 100);
            $largethumbnailpath = public_path('storage/images/thumbnail/'.$largethumbnail);
            $this->createThumbnail($largethumbnailpath, 250, 210);

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
        $destination = 'storage/images/'.$post->post_image;
        $destination1 = 'storage/images/thumbnail/large_'.$post->post_image;
        $destination2 = 'storage/images/thumbnail/small_'.$post->post_image;
        $destination3 = 'storage/images/thumbnail/medium_'.$post->post_image;
        if(File::exists($destination))
        {
            File::delete($destination);
            File::delete($destination1);
            File::delete($destination2);
            File::delete($destination3);
        }
        $post->delete();
        return redirect()->back()->with('status','Post Deleted Successfully');
    }

    public function createThumbnail($path, $width, $height)
    {
        $img = Image::make($path)->fit($width, $height)->save($path);
    }
}
