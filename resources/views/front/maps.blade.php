@extends('front.index')

@section('content')
    <main id="main">
        <section id="posts" class="posts">
            <div class="container" data-aos="fade-up">
                <div class="row g-5">
                    <div class="card">
                        <div class="card-body">
                            <div id='map' style='width: 100%; height: 600px;'></div>
                        </div>
                    </div>
                </div> <!-- End .row -->
            </div>
        </section>
    </main>
    {{-- <div class="container-md" data-aos="fade-in">
    <div class="row">
      <div class="col-12">
        <div class="map-container">
            <x-mapbox id="mapId" style="heigt:400%; width: 100%," id="map" :zoom="10" :navigationControls="true" mapbox="//styles/mapbox/outdoors-v12" :center="['long' => 8, 'lat' => 10]"/>
        </div>
      </div>
    </div>
</div> --}}
@endsection

@push('css')
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css' rel='stylesheet' />
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
    </script>
@endpush
