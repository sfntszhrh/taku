<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $data = Place::with('category')->orderBy('created_at', 'DESC')->get();

        $trending = Place::with('category')->limit(7)->orderBy('viewers', 'DESC')->get();

        return view('front.home', compact(['data', 'trending']));
    }

    public function maps()
    {
        $data = Place::with('category')->get();
        return view('front.maps', compact('data'));
    }
    public function places()
    {
        $data = Place::orderBy('created_at', 'DESC')->get();
        // dd($data);
        return view('front.places', compact('data'));
    }
   
    public function show($id)
    {
        $data = Place::findOrFail($id);

        return view('front.detil', compact('data'));
    }



}
