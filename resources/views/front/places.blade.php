@extends('front.index')

@section('content')
    <section>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">

                </div>
            </div>

            <div class="row mb-5">

                <div class="d-md-flex post-entry-2 half">
                    <a href="#" class="me-4 thumbnail">
                        @if (!$data->image)
                            <img src="{{ asset('front/img/post-landscape-2.jpg') }}" alt="" class="img-fluid">
                        @else
                            <img src="{{ asset('assets/img/240/' . $data->image) }}" alt="" class="img-fluid">
                        @endif
                    </a>
                    <div class="ps-md-5 mt-4 mt-md-0">
                        <div class="post-meta mt-2"></div>
                        <h2 class="mb-4 display-4">{{ $data->name }}</h2>

                        {!! $data->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
