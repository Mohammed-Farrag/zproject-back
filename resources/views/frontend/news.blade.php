@extends('frontend.layout.app')

@section('content')

    <!-- Start photintronews -->
    <section class="photintronews">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md col-sm-12 col-12" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <h2>Lorem Ipsum is simply </h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. ever since the 1500s
              <span class="animation-shap newshp2"><img src="{{ asset('frontend/img/newshp2.png') }}" alt="shap"></span>
            </p>
            <a class="contactbtn" href="#">Learn More</a>
          </div>
          <div class="col-lg-5 col-md col-sm-12 col-12" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <span class="squardots sqdofortop"><img src="{{ asset('frontend/img/squardots.png') }}" alt="img"></span>
            <span class="squardots sqdoforbottom"><img src="{{ asset('frontend/img/squardots.png') }}" alt="img"></span>
            <div class="upsliceimg">
              <img class="sliceimg" src="{{ asset('frontend/img/news-introimg.png') }}" alt="image">
              <div class="upshapesslice">
                <div class="row">
                  <div class="col-2"><span class="hidbottom"></span></div>
                  <div class="col-2"><span class="hidtop"></span></div>
                  <div class="col-2"><span class="hidbottom"></span></div>
                  <div class="col-2"><span class="hidtop"></span></div>
                  <div class="col-2"><span class="hidbottom"></span></div>
                  <div class="col-2"><span class="hidtop"></span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <span class="animation-shap newshp1"><img src="{{ asset('frontend/img/newshp1.png') }}" alt="shap"></span>
      </div>
    </section>
    <!-- End photintronews -->

    <!-- Start photnewsproducts -->
    <section class="photnewsproducts">
      
     @livewire('new-listing')
    </section>
    <!-- End photnewsproducts -->
@endsection