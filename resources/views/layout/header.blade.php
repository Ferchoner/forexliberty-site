<?php
/** @var $header Boolean */
?>
<header class="desktop-menu @if($header) fixed-top-visible @endif w-100">
    <div class="d-flex flex-column flex-md-row align-items-center pb-4 pt-2 header-div container">
        <a href="{{ route('home') }}" class="d-flex align-items-center text-dark text-decoration-none">
            <img src="{{ asset('image/logotipo_CC.svg') }}" alt="C & C" title="C & C" class="img-fluid cc-logo py-3 px-2">
        </a>
        <nav class="col d-flex justify-content-around mt-2 mt-md-0 ms-md-auto pl-5 cc-menu-container">
            <a class="m-option py-2 text-white text-candara-bold text-decoration-none" href="{{ route('home') }}/#us-section">Nosotros</a>
            <a class="m-option py-2 text-white text-candara-bold text-decoration-none" href="{{ route('services') }}">Servicios</a>
            <a class="m-option py-2 text-white text-candara-bold text-decoration-none" href="{{ route('medical') }}">Médico Legal</a>
            <a class="m-option py-2 text-white text-candara-bold text-decoration-none" href="{{ route('team') }}">Equipo</a>
            <a class="m-option py-2 text-white text-candara-bold text-decoration-none" href="{{ route('contact') }}">Contacto</a>
        </nav>
    </div>
</header>
<header class="mobile-menu w-100 @if(!$header) fixed-top-visible @endif">
    <div class="position-relative d-flex flex-column flex-md-row align-items-center pb-4 pt-2 header-div container">
        <a href="{{ route('home') }}" class="d-flex align-items-center text-dark text-decoration-none m-auto">
            <img src="{{ asset('image/logotipo_CC.svg') }}" alt="C & C" title="C & C" class="img-fluid cc-logo py-3 px-2">
        </a>
        <div class="burger-container">
            <div class="h-container" onclick="">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-menu-content position-fixed container-fluid w-100 h-100 pt-5">
    <div class="align-content-center row h-100 pt-lg-5 mt-lg-5">
        <div class="col list-el text-center"><a class="text-white text-candara-bold" href="{{ route('home') }}/#us-section">Nosotros</a></div>
        <div class="w-100"></div>
        <div class="col list-el text-center"><a class="text-white text-candara-bold" href="{{ route('services') }}">Servicios</a></div>
        <div class="w-100"></div>
        <div class="col list-el text-center"><a class="text-white text-candara-bold" href="{{ route('medical') }}">Médico Legal</a></div>
        <div class="w-100"></div>
        <div class="col list-el text-center"><a class="text-white text-candara-bold" href="{{ route('team') }}">Equipo</a></div>
        <div class="w-100"></div>
        <div class="col list-el text-center"><a class="text-white text-candara-bold" href="{{ route('contact') }}">Contacto</a></div>
    </div>
</div>
<script type="application/javascript">
    let header = {{ $header ? 'true' : 'false' }};
</script>
