<?php
/** @var $header Boolean */
?>
<header class="desktop-menu w-100">
    <div class="d-flex flex-column flex-md-row pb-4 pt-2 px-5 header-div container-fluid">
        <a href="{{ route('home') }}" class="d-flex align-items-center text-dark text-decoration-none">
            <img src="{{ asset('image/logotipo_FXL.svg') }}" alt="Forex Liberty" title="Forex Liberty" class="cc-logo img-fluid px-0 px-5">
        </a>
        <nav class="cc-menu-container col d-flex justify-content-between mt-2 mt-md-0 mx-3 mx-xl-5">
            <a class="m-option py-4 mt-2 text-montserrat-regular text-decoration-none" href="{{ route('licenses') }}">Licencias</a>
            <a class="m-option py-4 mt-2 text-montserrat-regular text-decoration-none" href="{{ route('testimony') }}">Testimonios</a>
            <a class="m-option py-4 mt-2 text-montserrat-regular text-decoration-none" href="{{ route('results') }}">Resultados</a>
            <a class="m-option py-4 mt-2 text-montserrat-regular text-decoration-none" href="{{ route('contact') }}">Contacto</a>
            <a class="m-option py-4 mt-2 text-montserrat-regular text-decoration-none" href="{{ route('about-us') }}">Acerca de</a>
        </nav>
        @include('layout.schedule-a-call', ['message' => 'Agenda una videollamada'])
    </div>
</header>
<header class="desktop-fixed-menu w-100">
    <div>
        <div class="d-flex flex-column flex-md-row pb-4 pt-2 px-5 header-div container-fluid">
            <a href="{{ route('home') }}" class="d-flex align-items-center text-dark text-decoration-none">
                <img src="{{ asset('image/logotipo_FXL.svg') }}" alt="Forex Liberty" title="Forex Liberty" class="cc-logo img-fluid px-0 px-5">
            </a>
            <nav class="cc-menu-container col d-flex justify-content-between mt-2 mt-md-0 mx-3 mx-xl-5">
                <a class="m-option py-4 mt-2 text-montserrat-regular text-decoration-none" href="{{ route('licenses') }}">Licencias</a>
                <a class="m-option py-4 mt-2 text-montserrat-regular text-decoration-none" href="{{ route('testimony') }}">Testimonios</a>
                <a class="m-option py-4 mt-2 text-montserrat-regular text-decoration-none" href="{{ route('results') }}">Resultados</a>
                <a class="m-option py-4 mt-2 text-montserrat-regular text-decoration-none" href="{{ route('contact') }}">Contacto</a>
                <a class="m-option py-4 mt-2 text-montserrat-regular text-decoration-none" href="{{ route('about-us') }}">Acerca de</a>
            </nav>
            @include('layout.schedule-a-call', ['message' => 'Agenda una videollamada'])
        </div>
    </div>
</header>
<header class="mobile-menu w-100 top-0">
    <div>
        <div class="d-flex flex-column flex-md-row pb-4 pt-2 header-div container-fluid">
            <a href="{{ route('home') }}" class="d-flex align-items-center text-dark text-decoration-none">
                <img src="{{ asset('image/logotipo_FXL.svg') }}" alt="Forex Liberty" title="Forex Liberty" class="cc-logo img-fluid">
            </a>
            <div class="burguer">
                <input type="checkbox" id="input-closed"/>
                <span></span>
                <span></span>
                <span></span>
                <div class="mobile-menu-content">
                    <div class="align-content-center row h-100 pt-lg-5 mt-lg-5">
                        <div class="col list-el text-center"><a class="text-white text-montserrat-regular" href="{{ route('licenses') }}">Licencias</a></div>
                        <div class="w-100"></div>
                        <div class="col list-el text-center"><a class="text-white text-montserrat-regular" href="{{ route('testimony') }}">Testimonios</a></div>
                        <div class="w-100"></div>
                        <div class="col list-el text-center"><a class="text-white text-montserrat-regular" href="{{ route('results') }}">Resultados</a></div>
                        <div class="w-100"></div>
                        <div class="col list-el text-center"><a class="text-white text-montserrat-regular" href="{{ route('contact') }}">Contacto</a></div>
                        <div class="w-100"></div>
                        <div class="col list-el text-center"><a class="text-white text-montserrat-regular" href="{{ route('about-us') }}">Acerca de</a></div>
                        <div class="w-100"></div>
                        @include('layout.schedule-a-call', ['message' => 'Agenda una videollamada'])
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
