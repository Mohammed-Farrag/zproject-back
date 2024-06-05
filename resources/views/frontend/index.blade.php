<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sunlit Photography | Home</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css.map') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <!-- for AOS animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}" />
    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- sora font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />
  </head>
  <body>
    <!-- Start photopenpage -->
    <section class="photopenpage">
      <div class="maincont">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
              <img src="{{ asset('frontend/img/startimg01.jpg') }}" class="d-block startimg" alt="image">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img src="{{ asset('frontend/img/startimg02.jpg') }}" class="d-block startimg" alt="image">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img src="{{ asset('frontend/img/startimg03.jpg') }}" class="d-block startimg" alt="image">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img src="{{ asset('frontend/img/startimg01.jpg') }}" class="d-block startimg" alt="image">
            </div>
          </div>
        </div>
        <div class="undercontent">
          <a href="#" class="socialicon"><span><i class="fa-brands fa-behance"></i></span></a>
          <a href="#" class="socialicon"><span><i class="fa-brands fa-x-twitter"></i></span></a>
          <a href="#" class="socialicon"><span><i class="fa-brands fa-facebook-f"></i></span></a>
          <a href="{{ route('store') }}" class="enterbtn">ENTER</a>
        </div>
        <div class="uphomelogo"><img src="{{ asset('frontend/img/fidaapng.png') }}" alt="logo"></div>
      </div>
    </section>
    <!-- End photopenpage -->
    
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/https://unpkg.com/aos@2.3.1/dist/aos.js') }}"></script>
    <script src="{{ asset('frontend/js/all.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js.map') }}"></script>
    <script src="{{ asset('frontend/js/myscript.js') }}"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
