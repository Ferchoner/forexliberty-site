<!DOCTYPE html>
<html>
<head>
    <title>C & C | @yield('page_title', 'Home')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no">
    <meta charset="UTF-8"/>
    <meta name="description" content="Firma jurídica y contable CVG">
    <meta name="keywords" content="firma,jurídica,juridica,CVG,contable,asesores">
    <meta name="author" content="Anzuelo">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="{{ asset('css/master.css') }}?v=1.0" media="screen" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}?v=1.0" media="screen" rel="stylesheet">
    @stack('styles')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-230006720-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-230006720-1');
    </script>
</head>
<body>
    @include('layout.header')
    <main role="main">
        @yield('content')
        @if(isset($header) && $header)
            <div id="contact-section" class="contact-section">
                <div class="container py-5">
                    <div class="row py-5">
                        <div class="col text-right border-lg-right col pr-lg-5 pr-3 text-right mb-5 mb-lg-0">
                            <p class="m-0 mb-4 pr-2 social-links">
                                <a href="https://www.facebook.com/colinycordoba" target="_blank" class="social-link">
                                    <img src="{{ asset('image/facebook_CC-01.svg') }}" alt="Facebook" class="img-fluid social-img">
                                </a>
                                <a href="https://www.instagram.com/colinycordoba" target="_blank" class="social-link">
                                    <img src="{{ asset('image/instagram_CC.svg') }}" alt="Instagram" class="img-fluid social-img">
                                </a>
                                <a href="https://www.youtube.com/@colincordoba5893" target="_blank" class="social-link">
                                    <img src="{{ asset('image/youtube_CC-01.svg') }}" alt="Youtube" class="img-fluid social-img">
                                </a>
                            </p>
                            <p class="text-content m-0 pr-2">
                                <a href="tel:4432230823" target="_blank"> 44 32 23 08 23</a> / <a href="tel:4434598358" target="_blank">44 34 59 83 58</a><br>
                                <a href="mailto:contacto@colin-cordoba.com.mx" target="_blank">contacto@colin-cordoba.com.mx</a>
                            </p>
                        </div>
                        <div class="col pr-3 pr-lg-0 text-lg-left text-right pb-5 pb-lg-0">
                            <a class="btn btn-primary" href="{{ route('contact') }}">
                                Agenda una cita
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </main>
    @include('layout.footer')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('js/master.js') }}?v1"></script>
    @stack('scripts')
</body>
</html>
