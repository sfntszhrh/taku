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
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Place</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form method = "POST" action="/admin/daftarplace">
               @csrf
                 <div class="form-group">
                <label for="exampleInput">Categorie_Id</label>
                <input name='category_id' type="text" class="form-control" id="exampleInputcategory" placeholder="">
               </div> <div class="card-body">
                  <div class="form-group">
                    <label class="col-form-label" for="input success">Name</label>
                    <input name='name' type="text" class="form-control is warning" id="InputName" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Input Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name ="image" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose File</label>
                      </div>
                  <div class="form-group">
                    <label for="exampleInput">Lat</label>
                    <input name='lat' type="text" class="form-control" id="exampleInputlat" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInput">Long</label>
                    <input name='Long' type="text" class="form-control" id="exampleInputlong" placeholder="">
                  </div>
                    </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    </section>
    <!-- /.content -->
  </div>
  @endsection
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-outline card-info">
          <div class="card-header">
            <h3 class="card-title">
              Summernote
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <textarea id="summernote">
              Place <em>some</em> <u>text</u> <strong>here</strong>
            </textarea>
          </div>
          <div class="card-footer">
            Visit <a href="https://github.com/summernote/summernote/">Summernote</a> documentation for more examples and information about the plugin.
          </div>
        </div>
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
    <div class="row">
      <div class="col-md-12">
        <div class="card card-outline card-info">
          <div class="card-header">
            <h3 class="card-title">
              CodeMirror
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <textarea id="codeMirrorDemo" class="p-3">
<div class="info-box bg-gradient-info">
<span class="info-box-icon"><i class="far fa-bookmark"></i></span>
<div class="info-box-content">
  <span class="info-box-text">Bookmarks</span>
  <span class="info-box-number">41,410</span>
  <div class="progress">
    <div class="progress-bar" style="width: 70%"></div>
  </div>
  <span class="progress-description">
    70% Increase in 30 Days
  </span>
</div>
</div>
            </textarea>
          </div>
          <div class="card-footer">
            Visit <a href="https://codemirror.net/">CodeMirror</a> documentation for more examples and information about the plugin.
          </div>
        </div>
      </div>
    </div>
  </section>