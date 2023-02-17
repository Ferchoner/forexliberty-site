@extends('layout.master')

@section('page_title', 'Home')

@push('styles')
    <link href="{{ asset('css/main/home.css') }}" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/home.js') }}"></script>
@endpush

@section('content')
    <div id="main-section" class="main-section mx-3 mx-md-5">
        <div class="row p-md-5 p-3 m-0">
            <div class="col-12 col-md-6 m-0 p-0 video-container">
                <video width="100%" muted autoplay loop>
                    <source src="{{ asset('video/corporativo_FXL.mp4') }}" type="video/mp4">
                    Este navegador no puede reproducir este video :(.
                </video>
            </div>
            <div class="col-12 col-md-6 data-container pe-0 pe-md-1 ps-0 ps-md-5">
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
                <div class="col-12 col-md-6 data-container mx-0 pe-3 ps-3 ps-md-5">
                    <p class="text-data-title text-montserrat-semibold">
                        Desarrollamos un sistema completamente automático,
                    </p>
                    <p class="text-data-info text-montserrat-regular">
                        amigable, confiable y preciso, para que personas con o sin experiencia en trading puedan generar ingresos pasivos.
                    </p>
                </div>
                <div class="col-12 col-md-6 image-container mt-3 mt-md-0 text-center">
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
                    <div class="col col-sm-12 col-md-6 col-lg-3 text-data-info text-montserrat-regular">
                        <img src="{{ asset('image/1-estrellas_FXL.svg') }}" alt="Prueba"> <br>
                        <span class="text-montserrat-semibold bigger">Prueba</span> <br>
                        3 Semanas
                    </div>
                    <div class="col col-sm-12 col-md-6 col-lg-3 text-data-info text-montserrat-regular">
                        <img src="{{ asset('image/2-estrellas_FXL.svg') }}" alt="Básica"> <br>
                        <span class="text-montserrat-semibold bigger">Básica</span> <br>
                        6 meses
                    </div>
                    <div class="col col-sm-12 col-md-6 col-lg-3 mt-4 mt-md-0 text-data-info text-montserrat-regular">
                        <img src="{{ asset('image/3-estrellas_FXL.svg') }}" alt="Premium"> <br>
                        <span class="text-montserrat-semibold bigger">Premium</span> <br>
                        1 Año
                    </div>
                    <div class="col col-sm-12 col-md-6 col-lg-3 mt-4 mt-md-0 text-data-info text-montserrat-regular">
                        <img src="{{ asset('image/4-estrellas_FXL.svg') }}" alt="Gold"> <br>
                        <span class="text-montserrat-semibold bigger">Gold</span> <br>
                        Vitalicia.
                    </div>
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
    <div id="review-section" class="review-section container-fluid py-3 px-0">
        <div class="row m-0 p-0 ps-md-5">
            <div class="align-self-center col-12 col-md-6 ps-3 ps-md-5">
                <iframe
                    src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3Dpfbid0FGUCXsLGMyFgQsbcu5VHwUzVPhnpki3UhVvxL9i9ukZmLiSZJxDWSyN7wNd6NmJtl%26id%3D100064028196535&show_text=true&width=500"
                    width="100%"
                    height="226"
                    style="border:none;overflow:hidden"
                    scrolling="no"
                    frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                </iframe>
            </div>
            <div class="col-12 col-md-6 data-container p-5 px-3 px-md-5">
                <p class="text-montserrat-semibold text-data-info bigger text-center pt-5">
                    98%
                </p>
                <p class="text-montserrat-semibold text-data-info text-center">
                    De nuestros usuarios nos recomiendan.
                </p>
                <p class="m-0 p-2 text-end">
                    <a class="hangout-button mb-2 mt-4 text-decoration-none text-montserrat-semibold" href="{{ route('testimony') }}">
                        Ver testimonios
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
                    <a class="hangout-button mb-2 mt-4 text-decoration-none text-montserrat-semibold" href="https://wa.me/524438430245?text=Hola,%20deseo%20contarme%20con%20ustedes" target="_blank">
                        Agenda una videollamada
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
