@extends('frontend.layout.app')

@section('content')
    <!-- Start photintroabout -->
    <section class="photintroabout">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md col-sm-12 col-12" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h2>God creates the beauty. <br> My camera and I are a witness </h2>
                    <p>Nature can bring you to stillness, that is its gift to you
                        <span class="animation-shap abshp2"><img class="" src="{{ asset('frontend/img/about-shp2.png') }}" alt="shap"></span>
                    </p>
                </div>
                <div class="col-lg-5 col-md col-sm-12 col-12" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="upcameraimg">
                        <img class="camimg" src="{{ asset('frontend/img/camera-introabout.png') }}" alt="image">
                        <span class="animation-shap abshp3"><img class="" src="{{ asset('frontend/img/about-shp3.png') }}" alt="shap"></span>
                    </div>
                </div>
            </div>
            <span class="animation-shap abshp1"><img class="" src="{{ asset('frontend/img/about-shp1.png') }}" alt="shap"></span>
        </div>
    </section>
    <!-- End photintroabout -->

    <!-- Start photintrolifeexp -->
    <section class="photintrolifeexp">
        <div class="container">
            <div class="row">
                <div class="col-md" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="lifeimg"><img src="{{ asset('frontend/img/lifeimage.png') }}" alt="image"></div>
                </div>
                <div class="col-md" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h2>LIFE IS ABOUT EXPERIENCES</h2>
                    <p>my name fidaa saied 'born and raised in villages called nahf ,situated on Upper Galilee in palestine. my wonderment of the natural world began at young age. As child. filled with
                        hike with friends across the prairies and beyond helped to instill the confidence I have in the outdoors, and the deep appreciation that I hold for our natural world and its
                        preservation. Despite photography having been a big part of my life for many years, I followed a different path after high school and chose a 'safe' career as a physiotherapist in
                        italy.And although physiotherapy has been very rewarding to me, but my true passion lies in photographing the beauty of nature. The joy and freedom I feel in the outdoors gives me
                        happiness, and my heart tells me that creating art is what I was meant to do. Landscape photography has enriched my life in countless ways; my self-taught exploration with the
                        camera has gave me the circle of joy magically combining my love of nature and the creation of art the god gave to us in this world. It is very liberating to capture a fleeting
                        moment in time that can be preserved forever as a beautiful fine art photography print. There's nothing like witnessing a burning sunrise or gazing up at the stars with fresh air
                        in your lungs to help de-stress and reconnect with this amazing planet that we call home. At some time in life you have crossroads that are presented to you or thrust upon you. I
                        really believe that true happiness is about following your passion.and i decided that I wanted to experience the place I love so much more - the great outdoors.</p>
                    <span class="animation-shap abshp4"><img src="{{ asset('frontend/img/lifeshap.png') }}" alt="shap"></span>
                </div>
            </div>
        </div>
    </section>
    <!-- End photintrolifeexp -->

    <!-- Start photintromotv -->
    <section class="photintromotv">
        <div class="container">
            <div class="row">
                <div class="col-md" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h2>WHAT MOTIVATES ME TO GET OUT</h2>
                    <p>There are always two people in every picture: the photographer and the viewer - ansel adams. My passion is taking photos of landscapes and I have been fortunate enough to travel to
                        many fantastic places – with my all time favourite being dolomites. I find it so rewarding when you get that picture that captures the weather, or the ever changing state of the
                        environment. You really do capture a ‘moment in time’. Landscape photography is so enjoyable to me as the next time you go on a walk or take your camera on a specific location you
                        just don’t know what you may capture.</p>
                </div>
                <div class="col-md" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="motvgroupimg">
                        <span class="centlog"><img src="{{ asset('frontend/img/fidaapng.png') }}" alt="image"></span>
                        <div class="row">
                            <div class="col-6"><img src="{{ asset('frontend/img/motvimg.png') }}" alt="image"></div>
                            <div class="col-6"><img src="{{ asset('frontend/img/motvimg.png') }}" alt="image"></div>
                            <div class="col-6"><img src="{{ asset('frontend/img/motvimg.png') }}" alt="image"></div>
                            <div class="col-6"><img src="{{ asset('frontend/img/motvimg.png') }}" alt="image"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End photintromotv -->
@endsection
