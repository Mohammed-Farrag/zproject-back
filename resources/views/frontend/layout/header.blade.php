<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sunlit Photography</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}" />

    <!-- for JQuery Toaster  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.toast.min.css') }}" />
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


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    @stack('styles')
    <!-- Livewire Styles -->
    @livewireStyles
</head>

<body class="lightmode000">
    <!-- Start photheader -->
    <section id="header" class="photheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <a class="linklogo" href="#"><img src="{{ asset('frontend/img/header-logo.png') }}" alt="logo"></a>
                    <span class="menubtn"><i class="fa-solid fa-bars"></i></span>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-12 col-12">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('news') }}">News</a></li>
                        <li><a href="{{ route('store') }}">Print store</a></li>
                        <li><a href="{{ route('contact') }}">contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-1 col-sm-12 col-12">
                    <div class="upaccount">
                        <a href="{{ route('cart') }}"><i class="fa-solid fa-cart-shopping"></i></a>
                        @auth
                        <a href="{{ route('frontend.logout') }}">

                            <form action="{{ route('frontend.logout') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="anchor"><i class="fa fa-sign-out"></i></button>
                            </form>

                        </a>
                        @else
                        <a href="{{ route('signin') }}"><i class="fa-solid fa-user"></i></a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End photheader -->