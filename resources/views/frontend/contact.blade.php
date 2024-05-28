@extends('frontend.layout.app')

@section('content')

    <!-- Start photintrocontact -->
    <section class="photintrocontact">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md col-sm-12 col-12" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <h2>Contact with me </h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. ever since the 1500s
              <span class="animation-shap abshp2"><img class="" src="{{ asset('frontend/img/about-shp2.png') }}" alt="shap"></span>
            </p>
            <a class="contactbtn" href="#">Contact Now</a>
          </div>
          <div class="col-lg-5 col-md col-sm-12 col-12" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <div class="upcameraimg">
              <img class="camimg" src="{{ asset('frontend/img/phone-introcontact.png') }}" alt="image">
              <span class="animation-shap abshp3"><img class="" src="{{ asset('frontend/img/about-shp3.png') }}" alt="shap"></span>
            </div>
          </div>
        </div>
        <span class="animation-shap abshp1"><img class="" src="{{ asset('frontend/img/about-shp1.png') }}" alt="shap"></span>
        <div class="contintroaft" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
          <div class="row">
            <div class="col">
              <span><i class="fa-solid fa-phone-volume"></i></span>
              <p>+20102555555</p>
            </div>
            <div class="col">
              <span><i class="fa-regular fa-envelope"></i></span>
              <p>Feadaa@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End photintrocontact -->

    <!-- Start photcontactform -->
    <section class="photcontactform">
      <div class="container">
        <div class="upformcontact" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
          <form>
            <div class="row">
              <!-- <div class="col-12"><label>Name</label></div> -->
              <div class="col-sm col-12"><input type="text" name="" placeholder="Your Name"></div>
            </div>
            <div class="row">
              <!-- <div class="col-12"><label>Email Address</label></div> -->
              <div class="col-12"><input type="email" name="" placeholder="Email Address"></div>
            </div>
            <div class="row">
              <!-- <div class="col-12"><label>Mobile Number</label></div> -->
              <div class="col-12"><input type="tel" name="" placeholder="Mobile Number"></div>
            </div>
            <div class="row">
              <!-- <div class="col-12"><label>Subject</label></div> -->
              <div class="col-12"><input type="text" name="" placeholder="Subject"></div>
            </div>
            <div class="row">
              <!-- <div class="col-12"><label>Message</label></div> -->
              <div class="col-12"><textarea name="" placeholder="Message" rows="6"></textarea></div>
            </div>
            <div class="row">
              <div class="col-12"><input type="submit" name="SEND" value="SEND"></div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- End photcontactform -->
@endsection