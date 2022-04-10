<?php

namespace App\Http\Controllers\backend_Controllers;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Controllers\backend_Controllers\Showcontact;
// use App\Models\showcontact;
use Illuminate\Http\Request;

class showcontactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showcontact = Contact::latest()->paginate(5);
        return view('backend/showcontact.index',compact('showcontact'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/showcontact.create');
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
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required',
            "address"=>'required'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Showcontact::create($input);
     
        return redirect()->route('showcontact.index')
                        ->with('success','showcontact created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  Showcontact $showcontact
     * @return \Illuminate\Http\Response
     */

    public function show(Showcontact $showcontact)
    {
        return view('backend/showcontact.show',compact('showcontact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Showcontact $showcontact
     * @return \Illuminate\Http\Response
     */
    public function edit(Showcontact $showcontact)
    {
        return view('backend/showcontact.edit',compact('showcontact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Showcontact $showcontact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Showcontact $showcontact)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required',
            "address"=>'required'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $showcontact->update($input);
    
        return redirect()->route('showcontact.index')
                        ->with('success','Showcontact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Showcontact $showcontact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Showcontact $showcontact)
    {
        $showcontact>delete();
        return redirect()->route('showcontact.index')
                        ->with('success','Showcontact deleted successfully');
    }
}
