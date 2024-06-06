<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sunlit Photography | Sign in</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css.map') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
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

    <!-- Start photsignforms -->
    <section class="photsignforms" style="height: 100vh">
      <div class="container">
        <div class="row">
          <div class="col-md col-sm-12 col-12">
            <div class="signimages">
              <img class="signimg01" src="{{ asset('frontend/img/signimg01.png') }}" alt="image">
              <img class="signimg02" src="{{ asset('frontend/img/signimg02.png') }}" alt="image">
              <img class="signimg03" src="{{ asset('frontend/img/signimg03.png') }}" alt="image">
            </div>
          </div>
          <div class="col-md col-sm-12 col-12">
            <div class="signsforms">
              <div class="uplogo"><img src="{{ asset('frontend/img/header-logo.png') }}" alt="image"></div>
              <form action="{{ route('frontend.login') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-12"><label>E-mail</label></div>
                  <div class="col-sm col-12"><input type="email" name="email"  value="{{ old('email') }}" placeholder="E-mail"></div>
                  @error('email')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="row">
                  <div class="col-12"><label>Password</label></div>
                  <div class="col-12"><input type="password" name="password" value="{{ old('password') }}" placeholder="Password"></div>
                  @error('password')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                  <div class="col-12"><a class="forgetlink" href="#">Forget your password?</a></div>
                </div>
                <div class="row">
                  <div class="col-12"><input type="submit" name="SEND" value="LOGIN"></div>
                </div>
              </form>
              <div class="aftform">
                <p>Already have an account? <a href="{{ route('signup') }}">Sign Up</a></p>
                <div class="forline"><span>OR</span></div>
                <a class="orgoogle"><img src="{{ asset('frontend/img/googleicon.png') }}" alt="icon"> CONTINUE WITH GOOGLE ACCOUNT</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End photsignforms -->

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
  </body>
</html>
