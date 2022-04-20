<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $photos = Photo::latest()->paginate(5);
       $gallerys = Photo::all();
        return view('backend/gallerys.list-gallery',compact('gallerys'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/gallerys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:12048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $profileImage = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('image/');
            // thumbnail 
            $img = Image::make($image->path());
            $img->fit(116,116)->save(  $destinationPath .'/'.$profileImage);
            $input['image'] = "$profileImage";
        }

       Photo::create($input);

        return redirect()->route('gallerys.index')
                        ->with('success','Photo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $gallery)
    {
        return view('backend/gallerys.show',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $gallery)
    {
        return view('backend/gallerys.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
      {

        $gallery = Photo::find($id);
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:12048',

        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/' . $gallery->image;
            if (File::exists($destinationPath)) {
                File::delete($destinationPath);
            }
            $profileImage = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('image/');
            // thumbnail 
            $img = Image::make($image->path());
            $img->fit(116,116)->save(  $destinationPath .'/'.$profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }


        $gallery->update($input);

        return redirect()->route('gallerys.index')
                        ->with('success','Photo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $gallery = Photo::find($id);
        $destination = 'image/' . $gallery->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $gallery->delete();

        return redirect()->route('gallerys.index')
                        ->with('success','Photo deleted successfully');

    }
}
