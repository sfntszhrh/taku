@extends('admin.layouts.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Data</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Tempat Wisata</h3>
                            </div>
                            <form method="POST" action="{{ route('place.store') }}" enctype="multipart/form-data">
                                <div class="card-body">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-form-label" for="input success">Nama Tempat Wisata</label>
                                        <input name='name' type="text" class="form-control is warning" id="InputName"
                                            placeholder="Tulis nama tempat wisata" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div id="map" style='width: 100%; height: 400px;'>
                                                {{-- isi peta --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInput">Latitude</label>
                                                <input name='lat' id="lat" type="text" class="form-control"
                                                    id="exampleInputlat" placeholder="" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInput">Longitude</label>
                                                <input name='long' id="long" type="text" class="form-control"
                                                    id="exampleInputlong" placeholder="" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInput">Kategori Wisata</label>
                                                <select name="category_id" class="form-control" required>
                                                    @foreach ($data as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Deskripsi Wisata</label>
                                                <textarea name="description" id="description" class="form-control" cols="30" rows="5"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Input Gambar</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input name="image" type="file" class="custom-file-input"
                                                            id="exampleInputFile" multiple>
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            File</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- /.card-body -->
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('css')
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css' rel='stylesheet' />
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
@endpush

@push('javascript')
    <script src="{{ asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        mapboxgl.accessToken =
            'pk.eyJ1Ijoicm9maWFyZWl2IiwiYSI6ImNsYW9xdHZ4cTB1OWYzcW1xaGVzZm84MGEifQ.xmNfOLtRRRWjk_skQzrR8A';
        const map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/streets-v12', // style URL
            center: [113.9014, -6.9946], // starting position [lng, lat]
            zoom: 9, // starting zoom
        });

        const nav = new mapboxgl.NavigationControl({
            visualizePitch: true
        });
        map.addControl(nav, 'top-right');

        const lat = document.getElementById('lat');
        const long = document.getElementById('long');

        map.on('click', (e) => {
            let latLang = e.lngLat;
            console.log(latLang);
            lat.value = latLang.lat;
            long.value = latLang.lng;
        })

        $(function() {
            bsCustomFileInput.init();
        });

        $(function() {
            // Summernote
            $('#description').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
@endpush
