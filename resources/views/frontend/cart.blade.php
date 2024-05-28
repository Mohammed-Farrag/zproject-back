@extends('frontend.layout.app')

@section('content')

    <!-- Start photcart -->
    <section class="photcart">
      <div class="container">
        <h3>YOUR CART <img class="animation-shap starimg" src="{{ asset('frontend/img/starshp.png') }}" alt="img"></h3>
        <div class="carttable">
          <img class="animation-shap twocircle" src="{{ asset('frontend/img/twocircle.png') }}" alt="image">
          <div class="row tabletitles">
            <div class="col-5"><h6>Product</h6></div>
            <div class="col-2"><h6>Quantity</h6></div>
            <div class="col-2"><h6>Price</h6></div>
            <div class="col-2"><h6>subtotal</h6></div>
            <div class="col-1"></div>
          </div>
          <!-- start product cart row -->
          <div class="row tableproduct">
            <div class="col-5">
              <div class="row">
                <div class="col text-end"><span class="smimg"><img src="{{ asset('frontend/img/productimg.png') }}" alt="image"></span></div>
                <div class="col dtimg text-start">
                  <span>lorem ipsum</span>
                  <span>size: A1</span>
                </div>
              </div>
            </div>
            <div class="col-2">
              <div class="incr-decr">
                <span>-</span>
                <span>1</span>
                <span>+</span>
              </div>
            </div>
            <div class="col-2"><span class="tbprice">123$</span></div>
            <div class="col-2"><span class="tbprice">123$</span></div>
            <div class="col-1"><span class="xicon"><i class="fa-regular fa-circle-xmark"></i></span></div>
          </div>
           <!-- End product cart row -->
           <!-- start product cart row -->
          <div class="row tableproduct">
            <div class="col-5">
              <div class="row">
                <div class="col text-end"><span class="smimg"><img src="{{ asset('frontend/img/productimg.png') }}" alt="image"></span></div>
                <div class="col dtimg text-start">
                  <span>lorem ipsum</span>
                  <span>size: A1</span>
                </div>
              </div>
            </div>
            <div class="col-2">
              <div class="incr-decr">
                <span>-</span>
                <span>1</span>
                <span>+</span>
              </div>
            </div>
            <div class="col-2"><span class="tbprice">123$</span></div>
            <div class="col-2"><span class="tbprice">123$</span></div>
            <div class="col-1"><span class="xicon"><i class="fa-regular fa-circle-xmark"></i></span></div>
          </div>
           <!-- End product cart row -->
           <!-- start product cart row -->
          <div class="row tableproduct">
            <div class="col-5">
              <div class="row">
                <div class="col text-end"><span class="smimg"><img src="{{ asset('frontend/img/productimg.png') }}" alt="image"></span></div>
                <div class="col dtimg text-start">
                  <span>lorem ipsum</span>
                  <span>size: A1</span>
                </div>
              </div>
            </div>
            <div class="col-2">
              <div class="incr-decr">
                <span>-</span>
                <span>1</span>
                <span>+</span>
              </div>
            </div>
            <div class="col-2"><span class="tbprice">123$</span></div>
            <div class="col-2"><span class="tbprice">123$</span></div>
            <div class="col-1"><span class="xicon"><i class="fa-regular fa-circle-xmark"></i></span></div>
          </div>
           <!-- End product cart row -->
        </div>
      </div>
    </section>
    <!-- End photcart -->

@endsection