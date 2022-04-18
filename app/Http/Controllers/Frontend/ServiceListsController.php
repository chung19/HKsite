<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Service;

use Illuminate\Http\Request;

class ServiceListsController extends Controller
{
    public function index()
    {
        $services = Service::latest()->paginate(10);

        return view('frontend/serviceLists', compact('services'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
