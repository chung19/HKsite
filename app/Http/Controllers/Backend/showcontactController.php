<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Contact;
// use App\Http\Controllers\backend_Controllers\Showcontact;
use Illuminate\Http\Request;

class ShowcontactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showcontacts = Contact::all();
        // $showcontacts = Contact::latest()->paginate(5);
        return view('backend/showcontacts.list-show-contact',compact('showcontacts'));
            // ->with('i', (request()->input('page', 1) - 1) *5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/showcontacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $showcontacts = new Contact();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required',

        ]);

        $input = $request->all();

        //

    Contact::create($input);

        return redirect()->route('showcontacts.index')
                        ->with('success','showcontacts created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  Contact $showcontacts
     * @return \Illuminate\Http\Response
     */

    public function show(Contact  $showcontact)
    {
        return view('backend/showcontacts.show',compact('showcontact'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Contact $showcontacts
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact  $showcontact)
    {
        return view('backend/showcontacts.edit',compact('showcontact'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Contact $showcontacts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $showcontact)
    {
        // $showcontacts= Contact::find($id);
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required',

        ]);

        $input = $request->all();
        $showcontact->update($input);
        return redirect()->route('showcontacts.index')
                        ->with('success','Showcontact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Contact $showcontacts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $showcontacts,$id)
    {
        $showcontacts= Contact::find($id);
        $showcontacts->delete();
        return redirect()->route('showcontacts.index')
                        ->with('success','Showcontact deleted successfully');
    }
}
