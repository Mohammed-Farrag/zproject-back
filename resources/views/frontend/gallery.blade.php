@extends('frontend.layout.app')

@section('content')

    <!-- Start photgallery -->
    <section class="photgallery">
      <div class="container">
        <div class="titlelogo" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
          <img class="gallerylogo" src="{{ asset('frontend/img/fidaa-black.png') }}" alt="image">
          <img class="animation-shap starimg" src="{{ asset('frontend/img/starshp.png') }}" alt="img">
          <img class="camicon-gallerytitle" src="{{ asset('frontend/img/camicon-gallerytitle.png') }}" alt="img">
        </div>
        <div class="row">
          @foreach ($galleries as $gallery)
            <div 
              class="col-md-4 col-sm-6 col-12" 
              data-aos="zoom-in" data-aos-duration="300" data-aos-delay="200">
              <div class="gallerybox">
                <img src="{{ $gallery->thumbnail }}" alt="image">
                <div class="boxoverlay">
                  <a href="#">{{ $gallery->title }}</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <img src="{{ asset('frontend/img/square-lines.png') }}" class="sqlin1" alt="img">
      <img src="{{ asset('frontend/img/square-lines.png') }}" class="sqlin2" alt="img">
      <img src="{{ asset('frontend/img/circle-dashes.png') }}" class="animation-shap circle-dashes" alt="img">
    </section>
    <!-- End photgallery -->

@endsection