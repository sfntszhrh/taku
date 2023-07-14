<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function maps()
    {
        return view('front.maps');
    }
    public function categories()
     {
 return view('front.categories');
    }

}
