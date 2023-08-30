@extends('front.index')
@section('content')
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            @foreach ($data->splice(0, 4) as $item)
                                <div class="swiper-slide">
                                    <a href="{{ route('tempat.detil', $item->id) }}" class="img-bg d-flex align-items-end"
                                        style="background-image: url('{{ asset('assets/img/' . $item->image) }}');">
                                        <div class="img-bg-inner">
                                            <h2>{{ $item->name }}</h2>
                                            {{-- <p>{!! $item->description !!}</p> --}}
                                        </div>
                                    </a> 
                                </div>
                            @endforeach
                        </div> 
                        <div class="custom-swiper-button-next">
                            <span class="bi-chevron-right"></span>
                        </div>
                        <div class="custom-swiper-button-prev">
                            <span class="bi-chevron-left"></span>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                @foreach ($data->splice(0, 1) as $item)
                    <div class="col-lg-4">
                        <div class="post-entry-1 lg">
                            <a href="{{ route('tempat.detil', $item->id) }}">
                                @if (!$item->image)
                                    <img src="{{ asset('front/img/post-landscape-1.jpg') }}" alt=""
                                        class="img-fluid">
                                @else
                                    <img src="{{ asset('assets/img/571/' . $item->image) }}" alt=""
                                        class="img-fluid">
                                @endif
                            </a>
                            <div class="post-meta"><span class="date">{{ $item->category->name }}</span> <span
                                    class="mx-1">&bullet;</span>
                                <span>{{ $item->viewers ? $item->viewers : '0' }} views</span>
                            </div>
                            <h2><a href="{{ route('tempat.detil', $item->id) }}">{{ $item->name }}</a></h2>
                            <p class="mb-4 d-block">{!! $item->description !!}</p>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-8">
                    <div class="row g-5">
                        <div class="col-lg-4 border-start custom-border">
                            @foreach ($data->splice(1, 3) as $item)
                                <div class="post-entry-1">
                                    <a href="{{ route('tempat.detil', $item->id) }}">

                                        @if (!$item->image)
                                            <img src="{{ asset('front/img/post-landscape-2.jpg') }}" alt=""
                                                class="img-fluid">
                                        @else
                                            <img src="{{ asset('assets/img/571/' . $item->image) }}" alt=""
                                                class="img-fluid">
                                        @endif
                                    </a>
                                    <div class="post-meta"><span class="date">{{ $item->category->name }}</span> <span
                                            class="mx-1">&bullet;</span>
                                        <span>{{ $item->viewers ? $item->viewers : '0' }} views</span>
                                    </div>
                                    <h2><a href="{{ route('tempat.detil', $item->id) }}">{{ $item->name }}</a></h2>
                                </div>
                            @endforeach

                        </div>
                        <div class="col-lg-4 border-start custom-border">
                            @foreach ($data->splice(3, 3) as $item)
                                <div class="post-entry-1">
                                    <a href="{{ route('tempat.detil', $item->id) }}">
                                        @if (!$item->image)
                                            <img src="{{ asset('front/img/post-landscape-2.jpg') }}" alt=""
                                                class="img-fluid">
                                        @else
                                            <img src="{{ asset('assets/img/571/' . $item->image) }}" alt=""
                                                class="img-fluid">
                                        @endif
                                    </a>
                                    <div class="post-meta"><span class="date">{{ $item->category->name }}</span> <span
                                            class="mx-1">&bullet;</span>
                                        <span>{{ $item->viewers ? $item->viewers : '0' }} views</span>
                                    </div>
                                    <h2><a href="{{ route('tempat.detil', $item->id) }}">{{ $item->name }}</a></h2>
                                </div>
                            @endforeach
                        </div>

                        <!-- Trending Section -->
                        <div class="col-lg-4">

                            <div class="trending">
                                <h3>7 of Trending</h3>
                                <ul class="trending-post">
                                    @foreach ($trending as $item)
                                        <li>
                                            <a href="{{ route('tempat.detil', $item->id) }}">
                                                <span class="number">{{ $loop->iteration }}</span>
                                                <h3>{{ $item->name }}</h3>
                                                <span class="author">{{ $item->category->name }} {{ $item->viewers }}
                                                    View</span>
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>

                        </div> <!-- End Trending Section -->
                    </div>
                </div>

            </div> <!-- End .row -->
        </div>
    </section>
@endsection
