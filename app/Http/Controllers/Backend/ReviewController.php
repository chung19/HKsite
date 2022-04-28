<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $reviews = Review::latest()->paginate(5);

        return view('backend/reviews.index',compact('reviews'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/reviews.create');
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
            'name' => 'required',
            'star' => 'required',
            'content' => 'required',
            'position' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $profileImage = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('image/');
            // thumbnail
            $img = Image::make($image->path());
            $img->fit(298, 298)->save(  $destinationPath .'/'.$profileImage);
            $input['image'] = "$profileImage";
        }

        Review::create($input);

        return redirect()->route('reviews.index')
                        ->with('success','Review created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        return view('backend/reviews.show',compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        return view('backend/reviews.edit',compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $review = Review::find($id);
        $request->validate([
            'name' => 'required',
            'star' => 'required',
            'content' => 'required',
            'position' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/' . $review->image;
            if (File::exists($destinationPath)) {
                File::delete($destinationPath);
            }
            $profileImage = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('image/');
            // thumbnail
            $img = Image::make($image->path());
            $img->fit(298, 298)->save(  $destinationPath .'/'.$profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $review->update($input);

        return redirect()->route('reviews.index')
                        ->with('success','Review updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);
        $destination = 'image/' . $review->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $review->delete();

        return redirect()->route('reviews.index')
                        ->with('success','Review deleted successfully');
    }
}
