<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Categories;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Categories::all();
        return view('/backend/categories.index_categories', compact('category'));
    }

    public function create()
    {
        $category = Categories::all();
        return view('/backend/categories.add_categories', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required'
        ]);

        $category = new Categories;
        $category->category_name = $request->input('category_name');
        $category->save();
        return redirect()->back()->with('status','Category Added Successfully');
    }

    public function edit($id)
    {
        $category = Categories::find($id);
        return view('backend/categories.edit_categories', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Categories::find($id);
        $category->category_name = $request->input('category_name');
        $category->update();
        return redirect()->back()->with('status','Category Updated Successfully');
    }

    public function destroy($id)
    {
        $category = Categories::find($id);
        $category->delete();
        return redirect()->back()->with('status','Category Deleted Successfully');
    }
}
