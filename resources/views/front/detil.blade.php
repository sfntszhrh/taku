@extends('front.index')
@section('content')
<main id="main">
    <section>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center mb-0">
          </div>
          <h2 class="mb-6 display-6">{{ $data->name }}</h2>
        </div>
        <div class="row mb-3">

          <div class="d-md-flex post-entry-2 half">
            <a href="#" class="me-4 thumbnail">
                @if (!$data->image)
                <img src="{{ asset('front/img/post-landscape-2.jpg') }}" alt=""
                    class="img-fluid">
            @else
                <img src="{{ asset('assets/img/571/' . $data->image) }}" alt=""
                    class="img-fluid">
                    <div class="ps-md-5 mt-4 mt-md-0">
                      <div class="post-meta mt-4">{{ $data->category->name }}</div>
                      
                      {!! $data->description !!}
                    </div>
            @endif
            </a>
           
          </div>
          <div class="d-md-flex post-entry-2 half mt-5">
            <a href="#" class="me-4 thumbnail order-2">
              <img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection