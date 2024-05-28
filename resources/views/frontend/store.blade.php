@extends('frontend.layout.app')

@section('content')
    <!-- Start photstoreintro -->
    <section class="photstoreintro">
        <div class="container">
            <img class="animation-shap circle-dashes" src="{{ asset('frontend/img/circle-dashes.png') }}" alt="img">
            <div class="row">

                <div class="col-md-5 col-sm-12 col-12" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="store-carousel stcar-left">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="5000">
                                    <img src="{{ asset('frontend/img/slide-store-img01.jpg') }}" class="d-block storeintroimg" alt="image">
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="{{ asset('frontend/img/slide-store-img02.jpg') }}" class="d-block storeintroimg" alt="image">
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="{{ asset('frontend/img/slide-store-img03.jpg') }}" class="d-block storeintroimg" alt="image">
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="{{ asset('frontend/img/slide-store-img04.jpg') }}" class="d-block storeintroimg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-sm-12 col-12" data-aos="flip-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="storeintrocontent">
                        <h2>Indulge <br> your eyes <img class="animation-shap starimg" src="{{ asset('frontend/img/starshp.png') }}" alt="img"></h2>
                        <h6>with</h6>
                        <img src="{{ asset('frontend/img/header-logo.png') }}" alt="logo">
                    </div>
                </div>

                <div class="col-md-5 col-sm-12 col-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="store-carousel stcar-right">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="5000">
                                    <img src="{{ asset('frontend/img/slide-store-img04.jpg') }}" class="d-block storeintroimg" alt="image">
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="{{ asset('frontend/img/slide-store-img03.jpg') }}" class="d-block storeintroimg" alt="image">
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="{{ asset('frontend/img/slide-store-img02.jpg') }}" class="d-block storeintroimg" alt="image">
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="{{ asset('frontend/img/slide-store-img01.jpg') }}" class="d-block storeintroimg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End photstoreintro -->

    <!-- Start photstoreproducts -->
    <section class="photstoreproducts">
        <img class="animation-shap lifeshap01" src="{{ asset('frontend/img/lifeshap.png') }}" alt="img">
        <img class="animation-shap lifeshap02" src="{{ asset('frontend/img/lifeshap.png') }}" alt="img">
        <div class="container">
            <img class="animation-shap squardots" src="{{ asset('frontend/img/squardots.png') }}" alt="img">
            <ul class="itemsproducts">
              @foreach ($categories as $category)
                  <li class="itactive" id="{{ $category->slug }}">{{ $category->title }}</li>
              @endforeach
            </ul>
            <div class="upmainproducts">
                <div class="row">
                    @foreach ($products as $product)
                        <!-- start product -->
                        <a href="{{ route('home.product', $product->id) }}" class="col-lg-4 col-md-4 col-sm-6 col-12 {{ $product->category->slug }}"  data-aos="zoom-in" data-aos-duration="300" data-aos-delay="200">
                            <div class="mainproduct">
                                <div class="upimage">
                                    <img src="{{ asset($product->image) }}" alt="image">
                                    <span><i class="fa-regular fa-file-image"></i></span>
                                </div>
                                <div class="productdetails">
                                    <h5>{{ $product->title }}</h5>
                                    <span class="prodprice">{{ $product->price }}$</span>
                                    <span class="carticon"><i class="fa-solid fa-cart-plus"></i></span>
                                </div>
                            </div>
                          </a>
                        <!-- End product -->
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End photstoreproducts -->
<script>
  

</script>
@endsection
