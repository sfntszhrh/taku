<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $data = Place::orderBy('created_at', 'DESC')->get();

        return view('front.home', compact('data'));
    }

    public function maps()
    {
        return view('front.maps');
    }
    public function places()
    {
        $data = Place::orderBy('created_at', 'DESC')->get();

        return view('front.places', compact('data'));
    }
   

}
