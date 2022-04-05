<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceDetailController extends Controller
{
    public function index(){
        $services = Service::latest()->paginate(6);

        return view('servicedetails',compact('services'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
