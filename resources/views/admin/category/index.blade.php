@extends('admin.layouts.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Category</h3>
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="/admin/tambahcategory">ADD</a></li>
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name Category</th>
                    <th class="text-center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($data as $item)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->name }}</td>
                        <td class="text-center">
                            <a href="{{ route('category.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a id="delete" data-url="{{ route('category.destroy', $item->id) }}" href="javascript:void(0)" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>  
                      @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
</div>
@endsection

@push('css')
    
@endpush

@push('javascript')
    <script>
        $(document).ready(function () {
            $('table').on('click', '#delete', function () {
                let URL = $(this).data('url');
                let token = $("meta[name='csrf-token']").attr("content");
                let trObj = $(this);
                
                $.ajax({
                    url: URL,
                    type: 'DELETE',
                    data: {
                        '_token': token,
                    },
                    success: function (response) {
                        if (response.success === true) {
                            trObj.parents("tr").remove();
                        }
                    }
                })
            })
        })
    </script>
@endpush