<?php
/** @var $ratings Array */
?>

@extends('layout.master')

@section('page_title', 'Home')

@push('styles')
    <link href="{{ asset('css/main/home.css') }}?v=1.5" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/home.js') }}?v=1.4"></script>
@endpush

@section('content')
    <div id="main-section" class="main-section mx-3 mx-md-5">
        <div class="row p-md-5 p-3 m-0">
            <div class="col-12 col-lg-6 m-0 p-0 video-container">
                <video width="100%" muted autoplay loop controls>
                    <source src="{{ asset('video/corporativo_FXL.mp4') }}" type="video/mp4">
                    Este navegador no puede reproducir este video :(.
                </video>
            </div>
            <div class="col-12 col-lg-6 data-container pe-0 pe-lg-1 ps-0 ps-lg-5">
                <p class="text-data-title text-montserrat-semibold">
                    Rendimiento constante y a largo plazo
                </p>
                <p class="text-data-info text-montserrat-regular">
                    <img src="{{ asset('image/check_FXL.svg') }}" alt="Check"> 5 Años en el mercado. <br>
                    <img src="{{ asset('image/check_FXL.svg') }}" alt="Check"> Operaciones automatizadas. <br>
                    <img src="{{ asset('image/check_FXL.svg') }}" alt="Check"> Resultados reales. <br>
                </p>
                <p class="text-end">
                    <a class="hangout-button mb-2 mt-4 text-decoration-none text-montserrat-semibold" href="{{ route('explanation') }}">
                        Explicación completa
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div id="system-section" class="system-section bg-transparent">
        <div class="container-fluid">
            <div class="row px-lg-5">
                <div class="col-12 col-lg-6 data-container mx-0 pe-3 ps-3 ps-md-5">
                    <p class="text-data-title text-montserrat-semibold">
                        Desarrollamos un sistema completamente automático,
                    </p>
                    <p class="text-data-info text-montserrat-regular">
                        amigable, confiable y preciso, para que personas con o sin experiencia en trading puedan generar ingresos pasivos.
                    </p>
                </div>
                <div class="col-12 col-lg-6 image-container mt-3 mt-lg-0 text-center">
                    <img src="{{ asset('image/robots_FXL.svg') }}" alt="Robots">
                </div>
            </div>
        </div>
    </div>
    <div id="licenses-section" class="licenses-section container-fluid">
        <div class="row m-0 p-0">
            <div class="col-12">
                <p class="text-data-title text-montserrat-semibold text-center">
                    Nuestras licencias <br>
                    se ajustan a tu medida.
                </p>
            </div>
            <div class="col-12 data-container text-center">
                <div class="row">
                    <div class="col d-none d-md-block"></div>
                    <div class="col col-12 col-md-3 text-data-info text-montserrat-regular">
                        <img src="{{ asset('image/2-estrellas_FXL.svg') }}" alt="Básica"> <br>
                        <span class="text-montserrat-semibold bigger">Básica</span> <br>
                        6 meses
                    </div>
                    <div class="col col-12 col-md-3 text-data-info text-montserrat-regular">
                        <img src="{{ asset('image/3-estrellas_FXL.svg') }}" alt="Premium"> <br>
                        <span class="text-montserrat-semibold bigger">Premium</span> <br>
                        1 Año
                    </div>
                    <div class="col col-12 col-md-3 text-data-info text-montserrat-regular">
                        <img src="{{ asset('image/ventas_FXL.svg') }}" alt="Premium" class="img-premium">
                        <img src="{{ asset('image/4-estrellas_FXL.svg') }}" alt="Gold"> <br>
                        <span class="text-montserrat-semibold bigger">Gold</span> <br>
                        Vitalicia.
                    </div>
                    <div class="col d-none d-md-block"></div>
                </div>
            </div>
            <div class="col-12 text-end px-2 px-md-5">
                <p class="m-0 p-2">
                    <a class="hangout-button mb-2 mt-4 text-decoration-none text-montserrat-semibold" href="{{ route('licenses') }}">
                        Conoce sus beneficios
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div id="reviews" class="review-section container-fluid py-3 px-0" style="opacity: 0; height: 0; margin: -115px 0 115px;position: relative;z-index: -1;">
        <div class="row m-0 p-0 ps-md-5">
            <div class="align-self-center col-12 col-lg-6 ps-3 ps-xl-5">
                <div class="row">
                    <div id="carouselReviews" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                        <div class="carousel-indicators">
                            @foreach($ratings as $review)
                                <button type="button" data-bs-target="#carouselReviews" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }} {{ $loop->first ? "aria-current='true'" : "" }} aria-label="Review {{ $loop->index + 1 }}">
                                </button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach($ratings as $review)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{ asset('image/bg_transparent.png') }}" class="d-block w-100" alt="Review No {{ $loop->index }}">
                                    <div class="carousel-caption">
                                        <p class="author-cont pb-3">
                                            <img class="img-fluid" src="{{ $review->photo }}" alt="Perfil">
                                            <span class="author text-montserrat-semibold fw-bold">{{ $review->name }}</span>
                                        </p>
                                        <p class="text-montserrat-regular fst-italic">
                                            "{{ implode(' ', array_slice(explode(' ', $review->comment), 0, 15)) }} ..."
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 data-container p-5 px-3 px-xl-5">
                <p class="text-montserrat-semibold text-data-info bigger text-center pt-5">
                    98%
                </p>
                <p class="text-montserrat-semibold text-data-info text-center">
                    De nuestros usuarios nos recomiendan.
                </p>
                <p class="m-0 p-2 text-center text-xl-end">
                    <a class="hangout-button mb-2 mt-4 text-decoration-none text-montserrat-semibold" href="https://www.facebook.com/forexlibertyautotrading/reviews" target="_blank">
                        Ver testimonios en Facebook
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div id="review-section" class="review-section container-fluid py-3 px-0">
        <div class="row m-0 p-0 ps-md-5">
            <div class="align-self-center col-12 col-lg-6 ps-3 ps-xl-5">
                <div class="row">
                    <div id="carouselReviews" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                        <div class="carousel-indicators">
                            @foreach($ratings as $review)
                                <button type="button" data-bs-target="#carouselReviews" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }} {{ $loop->first ? "aria-current='true'" : "" }} aria-label="Review {{ $loop->index + 1 }}">
                                </button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach($ratings as $review)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{ asset('image/bg_transparent.png') }}" class="d-block w-100" alt="Review No {{ $loop->index }}">
                                    <div class="carousel-caption">
                                        <p class="author-cont pb-3">
                                            <img class="img-fluid" src="{{ $review->photo }}" alt="Perfil">
                                            <span class="author text-montserrat-semibold fw-bold">{{ $review->name }}</span>
                                        </p>
                                        <p class="text-montserrat-regular fst-italic">
                                            "{{ implode(' ', array_slice(explode(' ', $review->comment), 0, 15)) }} ..."
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 data-container p-5 px-3 px-xl-5">
                <p class="text-montserrat-semibold text-data-info bigger text-center pt-5">
                    98%
                </p>
                <p class="text-montserrat-semibold text-data-info text-center">
                    De nuestros usuarios nos recomiendan.
                </p>
                <p class="m-0 p-2 text-center text-xl-end">
                    <a class="hangout-button mb-2 mt-4 text-decoration-none text-montserrat-semibold" href="https://www.facebook.com/forexlibertyautotrading/reviews" target="_blank">
                        Ver testimonios en Facebook
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div id="help-section" class="help-section container-fluid pt-3 px-0 pb-5">
        <div class="row m-0 px-3 px-md-5 pb-0 mx-auto">
            <div class="col-12 px-0 px-md-2">
                <p class="text-data-title text-montserrat-semibold text-center">
                    Hemos ayudado a cientos <br>
                    de personas a conseguir libertad financiera
                </p>
            </div>
            <div class="col-12 data-container text-center">
                <div class="row">
                    <div class="col-12 col-md-4 text-data-info text-montserrat-semibold px-3 py-2">
                        <div class="subcontainer">
                            Observa el bot <br>
                            trabajando <br>
                            <span class="help-img robot">
                                <a href="{{ route('bot-working') }}">
                                    <img src="{{ asset('image/robot_FXL.svg') }}" alt="Bot working">
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-data-info text-montserrat-semibold px-3 py-2">
                        <div class="subcontainer">
                            Consulta resultados<br>
                            de una cuenta real <br>
                            <span class="help-img monitor">
                                <a href="{{ route('results') }}">
                                    <img src="{{ asset('image/monitor_FXL.svg') }}" alt="Data">
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-data-info text-montserrat-semibold px-3 py-2">
                        <div class="subcontainer">
                            Respuesta a <br>
                            preguntas frecuentes <br>
                            <span class="help-img answers">
                                <a href="{{ route('faqs') }}">
                                    <img src="{{ asset('image/respuestas_FXL.svg') }}" alt="Quetions">
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center px-3 px-md-5 py-5">
                <p class="m-0 p-2">
                    @include('layout.schedule-a-call', ['message' => 'Agenda una videollamada'])
                </p>
            </div>
        </div>
    </div>
@endsection
