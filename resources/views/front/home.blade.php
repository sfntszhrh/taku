@extends('front.index')
@section('content')
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('{{ asset('front/img/gili-labak.jpg') }}');">
                                    <div class="img-bg-inner">
                                        <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est
                                            mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam
                                            obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem
                                            atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('{{ asset('front/img/pulau-kangean.jpg') }}');">
                                    <div class="img-bg-inner">
                                        <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New
                                            Haircut</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est
                                            mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam
                                            obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem
                                            atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('{{ asset('front/img/gili-iyang.jpg') }}');">
                                    <div class="img-bg-inner">
                                        <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est
                                            mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam
                                            obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem
                                            atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('{{ asset('front/img/post-slide-4.jpg') }}');">
                                    <div class="img-bg-inner">
                                        <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est
                                            mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam
                                            obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem
                                            atque.</p>
                                    </div>
                                </a>
                            </div>
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
                            <a href="{{ route('tempat.detil', $item->id) }}"><img
                                    src="{{ asset('front/img/post-landscape-1.jpg') }}" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">{{ $item->category->name }}</span> <span
                                    class="mx-1">&bullet;</span>
                                <span>{{ $item->viewers ? $item->viewers : '0' }} views</span>
                            </div>
                            <h2><a href="{{ route('tempat.detil', $item->id) }}">{{ $item->name }}</a></h2>
                            <p class="mb-4 d-block">{{ $item->description }}</p>
                        </div>

                    </div>
                @endforeach

                <div class="col-lg-8">
                    <div class="row g-5">
                        <div class="col-lg-4 border-start custom-border">
                            @foreach ($data->splice(1, 3) as $item)
                                <div class="post-entry-1">
                                    <a href="{{ route('tempat.detil', $item->id) }}"><img
                                            src="{{ asset('front/img/post-landscape-2.jpg') }}" alt=""
                                            class="img-fluid"></a>
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
                                    <a href="s{{ route('tempat.detil', $item->id) }}"><img
                                            src="{{ asset('front/img/post-landscape-2.jpg') }}" alt=""
                                            class="img-fluid"></a>
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
                                            <a href="single-post.html">
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
