<?php

namespace App\Http\Controllers\backend_Controllers;
use App\Http\Controllers\Controller;
use App\Models\contact;
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
      
        $showcontact = Showcontact::latest()->paginate(5);
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
  
        
    
        Showcontact::create($input);
     
        return redirect()->route('showcontact.index')
                        ->with('success','Showcontact created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  Showcontact $showcontact
     * @return \Illuminate\Http\Response
     */
    public function show(Showcontact $showcontact)
    {
        return view('backend/showcontact.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Showcontact $showcontact
     * @return \Illuminate\Http\Response
     */
    public function edit(Showcontact $showcontact)
    {
        return view('backend/showcontact.edit',compact('product'));
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
        //  Store data in database
        Contact::create($request->all());
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
        $showcontact->delete();
     
        return redirect()->route('showcontact.index')
                        ->with('success','Showcontact deleted successfully');
    }
}
