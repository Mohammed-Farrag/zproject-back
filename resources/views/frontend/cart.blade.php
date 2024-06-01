@extends('frontend.layout.app')

@section('content')

    <!-- Start photcart -->
    <section class="photcart">
      <div class="container">
        <h3>YOUR CART <img class="animation-shap starimg" src="{{ asset('frontend/img/starshp.png') }}" alt="img"></h3>
       
        <div class="carttable" >
          <img class="animation-shap twocircle" src="{{ asset('frontend/img/twocircle.png') }}" alt="image">
          <div class="row tabletitles">
            <div class="col-5"><h6>Product</h6></div>
            <div class="col-2"><h6>Quantity</h6></div>
            <div class="col-2"><h6>Price</h6></div>
            <div class="col-2"><h6>subtotal</h6></div>
            <div class="col-1"></div>
          </div>

         @livewire('cart')
        </div>
        <div class="order w-100 text-end py-5">
          <button class="order-now">order now</button>
        </div>
      </div>
    </section>
    <!-- End photcart -->

@endsection


<style>
  .order-now{
    background: transparent;
    color: #fff;
    border: 2px solid #fff;
    padding: 10px 20px;
    cursor: pointer;
    transition: all .2s ease-in;
  }
  .order-now:hover{
    background: #fff;
    color: #000;
  }
</style>
