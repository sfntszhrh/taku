<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Place;
use App\Models\Category;
use Illuminate\Http\Request;
use App\DataTables\PlacesDataTable;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class PlaceController extends Controller
{
    public $path;
    public $dimension;

    public function __construct()
    {
        $this->path = "assets/img";
        $this->dimension = [245, 360, 750];
    }
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
        $data = Category::all(); // SELECT * FROM category;
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

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            // beri nama atas file dengan waktu sekarang plus nomor unik
            $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            // upload original file
            $img = Image::make($file);
            $img->backup();
            // TAHAP PERTAMA
            $resizeImgPertama = $img->resize(900, 571, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Image::make($resizeImgPertama)->save($this->path. '/'.$fileName);
            $img->reset();

            // TAHAP KEDUA
            // membuat kanvas
            $canvas2 = Image::canvas(900, 571);
            // membuat ukuran
            $resizeImgKedua  = $img->resize(900, 571);

            if (!File::isDirectory($this->path . '/' . 571)) {
                File::makeDirectory($this->path . '/' . 571);
            }
            // masukan perubahan gambar kedalam kanvas
            $canvas2->insert($resizeImgKedua, 'center');
            // simpan ke dalam folder
            $resizeImgKedua->save($this->path . '/' . 571 . '/' . $fileName);
            $img->reset();

            // TAHAP KETIGA
            // membuat kanvas
            $canvas3 = Image::canvas(900, 900);
            // membuat ukuran
            $resizeImgTiga  = $img->resize(900, 900);

            if (!File::isDirectory($this->path . '/' . 900)) {
                File::makeDirectory($this->path . '/' . 900);
            }
            // masukan perubahan gambar kedalam kanvas
            $canvas3->insert($resizeImgKedua, 'center');
            // simpan ke dalam folder
            $resizeImgTiga->save($this->path . '/' . 900 . '/' . $fileName);
            $img->reset();
        } else {
            $fileName = $request->image;
        }

        $save = Place::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'lat' => $request->lat,
            'long' => $request->long,
            'image' => $fileName,
        ]);

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
        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            // beri nama atas file dengan waktu sekarang plus nomor unik
            $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            // upload original file
            $img = Image::make($file);
            $img->backup();
            // TAHAP PERTAMA
            $resizeImgPertama = $img->resize(900, 571, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Image::make($resizeImgPertama)->save($this->path. '/'.$fileName);
            $img->reset();

            // TAHAP KEDUA
            // membuat kanvas
            $canvas2 = Image::canvas(900, 571);
            // membuat ukuran
            $resizeImgKedua  = $img->resize(900, 571);

            if (!File::isDirectory($this->path . '/' . 571)) {
                File::makeDirectory($this->path . '/' . 571);
            }
            // masukan perubahan gambar kedalam kanvas
            $canvas2->insert($resizeImgKedua, 'center');
            // simpan ke dalam folder
            $resizeImgKedua->save($this->path . '/' . 571 . '/' . $fileName);
            $img->reset();

            // TAHAP KETIGA
            // membuat kanvas
            $canvas3 = Image::canvas(900, 900);
            // membuat ukuran
            $resizeImgTiga  = $img->resize(900, 900);

            if (!File::isDirectory($this->path . '/' . 900)) {
                File::makeDirectory($this->path . '/' . 900);
            }
            // masukan perubahan gambar kedalam kanvas
            $canvas3->insert($resizeImgKedua, 'center');
            // simpan ke dalam folder
            $resizeImgTiga->save($this->path . '/' . 900 . '/' . $fileName);
            $img->reset();
        } else {
            $fileName = $request->image;
        }

        $place = Place::findOrFail($id);
        $place->category_id = $request->category_id;
        $place->name = $request->name;
        $place->description = $request->description;
        $place->image = $fileName;
        $place->lat = $request->lat;
        $place->long = $request->long;
        $place->update();
        return redirect()->route('place.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        {
            $del = Place::all()->delete();
    
            if ($del) {
                return response()->json([
                    'success' => true,
                    'message' => 'Hapus data berhasil',
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Hapus data gagal',
                ]);
            }
        }
    }
}
