@extends('admin.layouts.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Simple Tables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Place</h3>
                            <div class="card-tools">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="{{ route('place.create') }}">ADD</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Kategori</th>
                                        <th>Lat</th>
                                        <th>Long</th>
                                        <th>Image</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->category->name }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->lat }}</td>
                                            <td>{{ $item->long }}</td>
                                            <td>{{ $item->image }}</td>
                                            <td class="text-center">
                                                <a href="http://" class="btn btn-info btn-sm">Lihat</a>
                                                <a href="http://" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="http://" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
