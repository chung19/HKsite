<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;
class TeamController extends Controller
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

        $teams = Team::select("*")
        ->paginate(5);
        return view('backend/team.list-team', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/team.create-team');
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
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:12048',
            'category' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $profileImage = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('image/');
            // thumbnail
            $img = Image::make($image->path());
            $img->fit(271, 298)->save(  $destinationPath .'/'.$profileImage);
            $input['image'] = "$profileImage";
        }

        Team::create($input);

        return redirect()->route('team.index')
            ->with('success', 'Team created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('backend/team.details-team', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('backend/team.edit-team', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/' . $team->image;
            if (File::exists($destinationPath)) {
                File::delete($destinationPath);
            }
            $profileImage = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('image/');
            // thumbnail
            $img = Image::make($image->path());
            $img->fit(271, 298)->save(  $destinationPath .'/'.$profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $team->update($input);

        return redirect()->route('team.index')
            ->with('success', 'Team updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        $destination = 'image/' . $team->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $team->delete();
        return redirect()->route('team.index')
            ->with('success', 'Team deleted successfully');
    }
}
