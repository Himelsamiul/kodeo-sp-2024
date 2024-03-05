<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHomePage()
    {
        return view('backend.pages.dashboard');
    }

    public function orderList()
    {
        return view('backend.pages.order-list');
    }
}
