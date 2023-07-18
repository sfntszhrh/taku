<?php

namespace App\Http\Controllers;

use App\DataTables\PlacesDataTable;
use App\Models\Category;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PlacesDataTable $dataTable)
    {
        $data= Place::all();
        // return view('admin.place.index', compact('data'));
        return $dataTable->render('admin.place.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Category::all();
        return view('admin.place.add', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        $save = Place::create($request->all());

        if ($save) {
            return redirect()->route('place.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Place $place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Place::with('category')->where('id', $id)->first();
        $category = Category::all();
        return view('admin.place.edit', compact(['data', 'category']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $place = Place::findOrFail($id);
        $place->update($request->all());
        return redirect()->route('place.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        //
    }
}
