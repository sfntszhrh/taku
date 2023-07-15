@extends('front.index')

@section('content')
<main id="main">
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
          <div class="row g-5">
            
            <x-mapbox id="mapId" style="heigt:400%; width: 100%," id="map" :zoom="10" :navigationControls="true" mapbox="//styles/mapbox/outdoors-v12" :center="['long' => 8, 'lat' => 10]"/>
            
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


