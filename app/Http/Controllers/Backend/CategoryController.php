<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
      return view('backend.pages.category.list');
    }

    public function categoryForm()
    {
        return view('backend.pages.category.create');
    }

    public function categoryStore(Request $request)
    {
        

        Category::create([
            //banm pase column name => dan pase value
            'name'=>$request->cat_name,
            'description'=>$request->description
        ]);

    return redirect()->back();
    }


}
