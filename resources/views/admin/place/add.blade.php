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
                                <h3 class="card-title">Place</h3>
                            </div>
                            <form method="POST" action="{{ route('place.store') }}">
                                <div class="card-body">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInput">Categorie_Id</label>
                                        <input name='category_id' type="text" class="form-control"
                                            id="exampleInputcategory" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label" for="input success">Name</label>
                                        <input name='name' type="text" class="form-control is warning" id="InputName"
                                            placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Input Gambar</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="image" type="file" class="custom-file-input"
                                                    id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    File</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput">Lat</label>
                                        <input name='lat' type="text" class="form-control" id="exampleInputlat"
                                            placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput">Long</label>
                                        <input name='Long' type="text" class="form-control" id="exampleInputlong"
                                            placeholder="">
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>

                                    <!-- /.card-body -->
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
