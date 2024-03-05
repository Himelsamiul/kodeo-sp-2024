<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function list()
    {
        return view('backend.pages.product.list');
    }


    public function  createForm()
    {
        return view('backend.pages.product.create');
    }

}
