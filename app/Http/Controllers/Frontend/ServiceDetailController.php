<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceDetailController extends Controller
{
    public function index(){
        $s = Service::latest()->paginate(6);
        $se = Service::latest()->paginate(6);
        $service_default = Service::latest()->paginate(1);
        return view('frontend/servicedetails',compact('s','se','service_default'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function show($id)
    {
        $se = Service::find($id);
        $s = Service::latest()->paginate(6);

        return view('frontend/servicedetails',compact('se','s'));
    }


}
