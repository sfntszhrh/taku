@extends('front.index')

@section('content')
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
            <div class="row g-2">
                <div class="card">
                    <div class="card-body">
                        <div id='map' style='width: 100%; height: 600px;'></div>
                    </div>
                </div>
            </div> <!-- End .row -->
        </div>
    </section>
@endsection

@push('css')
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css' rel='stylesheet' />
    <style>
        .marker {
            background-image: url("{{ asset('front/img/pin.png') }}");
            background-size: cover;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            cursor: pointer;
        }

        .mapboxgl-popup {
            max-width: 200px;
        }

        .mapboxgl-popup-content {
            text-align: center;
            font-family: 'Open Sans', sans-serif;
        }
    </style>
@endpush

@push('javascript')
    <script>
        mapboxgl.accessToken =
            'pk.eyJ1Ijoicm9maWFyZWl2IiwiYSI6ImNsYW9xdHZ4cTB1OWYzcW1xaGVzZm84MGEifQ.xmNfOLtRRRWjk_skQzrR8A';
        const map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/streets-v12', // style URL
            center: [113.9014, -6.9946], // starting position [lng, lat]
            zoom: 10.5, // starting zoom
        });

        const nav = new mapboxgl.NavigationControl({
            visualizePitch: true
        });
        map.addControl(nav, 'top-right');


        // data dari database
        const lokasi = {
            "features": {!! json_encode($data->toArray()) !!}
        }

        console.log(lokasi.features);
        // add markers to map
        for (const feature of lokasi.features) {
            // create a HTML element for each feature
            const el = document.createElement('div');
            el.className = 'marker';
            // console.log(feature.name);
            // make a marker for each feature and add it to the map
            new mapboxgl.Marker(el)
                .setLngLat([feature.long, feature.lat])
                .setPopup(
                    new mapboxgl.Popup({
                        offset: 25
                    }) // add popups
                    .setHTML(
                        `<h3><a href="/front/places/${feature.id}">${feature.name}</a></h3><p>${feature.category.name}</p>`
                    )
                )
                .addTo(map);
        }
    </script>
@endpush
