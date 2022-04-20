<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;
class newsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $newsletters = Newsletter::select("*")
        ->paginate(10);

        // $newsletters = Newsletter::all();
        return view('backend/newsletters.list-newsletter',compact('newsletters'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/newsletters.create');
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
            // $newsletter_img = new newsletter_img;
            'email' => 'required|',

        ]);

        $input = $request->all();
        Newsletter::create($input);
        return redirect()->route('newsletters.index')
                        ->with('success','newsletter created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        return view('backend/newsletters.show',compact('newsletter'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newsletter  $newslette
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {

        return view('backend/newsletters.edit',compact('newsletter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newsletter  $newslette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        $request->validate([
            'email' => 'required|email',

        ]);

        $input = $request->all();
        $newsletter->update($input);
        return redirect()->route('newsletters.index')
                        ->with('success','newsletter updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletter  $newslette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        $newsletter->delete();
        return redirect()->route('newsletters.index')
        ->with('success','newsletter deleted successfully');

    }
}
