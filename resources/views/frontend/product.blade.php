@extends('frontend.layout.app')

@section('content')


    @livewire('single-product', ['productId' => $product->id ])

    <!-- Start photaddreview -->
    <section class="photaddreview">
        <div class="container">
            <h3>ADD A REVIEW <span class="animation-shap productshp1"><img src="{{ asset('frontend/img/product-shp1.png') }}"></span></h3>
            <div class="row">
               @livewire('review', ['productId' => $product->id ])
                <div class="col-md" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img class="reviewimg" src="{{ asset('frontend/img/review-img.png') }}" alt="image">
                    <span class="animation-shap abshp3"><img src="{{ asset('frontend/img/about-shp3.png') }}" alt="shap"></span>
                </div>
            </div>
        </div>
    </section>
    <!-- End photaddreview -->

    <!-- Start photmaylike -->
    <section class="photmaylike">
        <div class="container">
            <h4>You may also like</h4> 
            <div class="row">
                @foreach ($products as $p)
                    <!-- start product -->
                    <a href="{{ route('home.product', $p->id) }}" class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="200">
                        <div class="mainproduct">
                            <div class="upimage">
                                <img src="{{ asset($p->image) }}" alt="image">
                                <span><i class="fa-regular fa-file-image"></i></span>
                            </div>
                            <div class="productdetails">
                                <h5>{{ $p->title }}</h5>
                                <span class="prodprice">{{ $p->price }}$</span>
                                <span class="carticon"><i class="fa-solid fa-cart-plus"></i></span>
                            </div>
                        </div>
                    </a>
                    <!-- End product -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- End photmaylike -->
@endsection
