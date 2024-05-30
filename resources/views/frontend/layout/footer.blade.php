    <!-- Start photfooter -->
    <footer class="photfooter">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-12">
            <img src="{{ asset('frontend/img/header-logo.png') }}" alt="image">
            <p class="paragtitle">Lorem Ipsum is simply dummy text of the <br> printing and typesetting industry.</p>
          </div>
          <div class="col-md-3 col-sm-6 col-6">
            <h6>Quick Links</h6>
            <a href="#">About</a>
            <a href="#">Gallery</a>
            <a href="#">Print store</a>
            <a href="#">News</a>
          </div>
          <div class="col-md-3 col-sm-6 col-6">
            <h6>Contact Us</h6>
            <div class="fotcontact"><span><i class="fa-solid fa-phone"></i></span> +20102555555</div>
            <div class="fotcontact"><span><i class="fa-solid fa-envelope"></i></span> Feadaa@gmail.com</div>
            <div class="socialgr">
              <span><a href="#"><i class="fa-brands fa-behance"></i></a></span>
              <span><a href="#"><i class="fa-brands fa-x-twitter"></i></a></span>
              <span><a href="#"><i class="fa-brands fa-facebook-f"></i></a></span>
            </div>
          </div>
          <div class="col-12">
            <p class="copyright">All right are reserved for sunlit photography 2024</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- End photfooter -->

    <!-- starting button-top -->
    <div id="button-top">
      <i class="fa-solid fa-chevron-up"></i>
    </div>
    <!-- End button-top -->

    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('frontend/js/all.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js.map') }}"></script>
    <script src="{{ asset('frontend/js/myscript.js') }}"></script>
    <script>
      AOS.init();
    </script>

    <!-- Livewire Scripts -->
    @livewireScripts
    </body>

    </html>