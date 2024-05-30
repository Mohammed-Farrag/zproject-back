@extends('frontend.layout.app')

@section('content')
    <!-- Start photproductpart -->
    <section class="photproductpart">
        <div class="container">
            <div class="row">
                <div class="col-md col-sm-12 col-12" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="product-image">
                        <img src="{{ asset($product->image) }}" alt="image">
                    </div>
                </div>
                <div class="col-md col-sm-12 col-12" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="product-details">
                        <h4>{{ $product->title }}<span><i class="fa-solid fa-arrow-up-from-bracket"></i></span></h4>
                        <div class="prdpricing">
                            <span>{{ $product->price }}$</span>
                            <p>{{ $product->description }}</p>
                        </div>
                        <div class="prdsize">
                            <h6>Paper Size</h6>
                            <div>
                                <span>A0</span>
                                <span class="active">A1</span>
                                <span>A2</span>
                            </div>
                            <p>A1 (841mm x 594mm) - 151$ - limited to 5 editions</p>
                        </div>
                        <div class="prdcount">
                            <h6>Quantity</h6>
                            <div>
                                <span>-</span>
                                <span>1</span>
                                <span>+</span>
                            </div>
                        </div>
                        <div class="prdaddcard"><button type="button">ADD TO CART</button></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End photproductpart -->

    <!-- Start photaddreview -->
    <section class="photaddreview">
        <div class="container">
            <h3>ADD A REVIEW <span class="animation-shap productshp1"><img src="{{ asset('frontend/img/product-shp1.png') }}"></span></h3>
            <div class="row">
                <div class="col-md" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <form>
                        <div>
                            <input type="text" name="" placeholder="Your Name">
                        </div>
                        <div>
                            <input type="email" name="" placeholder="Your Email">
                        </div>
                        <div>
                            <textarea name="" placeholder="Your Comment" rows="6"></textarea>
                        </div>
                        <div class="ratestars">
                            <span>YOUR RATE:</span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                        </div>
                        <div>
                            <input type="submit" name="SEND" value="SEND">
                        </div>
                    </form>
                </div>
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
