<<<<<<< HEAD
@extends('front.index')

@section('content')
    <section>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-lg-4 custom-border">
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
                        <div class="col-lg-4 border-start custom-border">
                            @foreach ($data->splice(6, 3) as $item)
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
=======
<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
</head>
<body>
    <h1>Dropdown Menu Example</h1>
    <form>
        <label for="dropdown">Select an option:</label>
        <select id="dropdown" name="dropdown">
            @foreach($options as $option)
                <option value="{{ $option->value }}">{{ $option->label }}</option>
            @endforeach
        </select>  
    </form>
</body>
</html>
>>>>>>> ef82bc2c025cf4f5c38e7493494b4276dcc1cd13
