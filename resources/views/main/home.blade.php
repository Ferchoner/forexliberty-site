@extends('layout.master')

@section('page_title', 'Home')

@push('styles')
    <link href="{{ asset('css/main/home.css') }}" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/home.js') }}"></script>
@endpush

@section('content')
    <div class="main-section" class="bg-transparent">
        <div class="main-bg">
            <video class="d-none d-lg-block" autoplay loop>
                <source src="{{ asset('video/video-desktop_CC.mp4') }}" type="video/mp4">
            </video>
            <video class="d-block d-lg-none" autoplay loop>
                <source src="{{ asset('video/video-mobile_CC.mp4') }}" type="video/mp4">
            </video>
            Lo sentimos pero tu navegador no soporta la reproduccion de video
        </div>
        <div id="mainCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('image/transparent-bg.png') }}" class="d-block img-fluid slider-img" alt="C & C Juridicos">
                    <div class="carousel-caption d-block text-left container">
                        <h1 class="text-candara-bold section-title">
                            MÁS DE <span class="bigger">10</span> AÑOS
                        </h1>
                        <p class="text-gotham-medium text-content-slide mb-3 mb-lg-5">
                            Brindando Asesoría Empresarial y Médico Legal.
                        </p>
                        <div class="text-right w-100 pt-3 pt-lg-5">
                            <a class="btn btn-primary text-capitalize text-right" href="{{ route('contact') }}">
                                Asesórate
                            </a>
                        </div>
                    </div>
                </div>
{{--                <div class="carousel-item">--}}
{{--                    <img src="{{ asset('image/transparent-bg.png') }}" class="d-block img-fluid slider-img" alt="C & C Juridicos">--}}
{{--                    <div class="carousel-caption container text-left">--}}
{{--                        <h1 class="text-candara-bold section-title">--}}
{{--                            SEGUNDO SLIDE--}}
{{--                        </h1>--}}
{{--                        <p class="text-gotham-medium text-content-slide mb-5">--}}
{{--                            Brindando asesoría jurídico y contable en otro slide--}}
{{--                        </p>--}}
{{--                        <div class="text-right w-100 pt-5">--}}
{{--                            <button class="btn btn-primary text-capitalize text-right">--}}
{{--                                Asesórate--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <div id="fake-us-section" class="fake-us-section bg-white">
        <div class="container p-lg-5">
            <div class="row px-lg-5">
                <div class="col pb-3 pb-lg-3 pt-3 pt-lg-0">
                    <span class="text-candara-bold section-title">
                        Nosotros
                    </span>
                    <p class="text-gotham-book text-justify text-content">
                        Somos una consultoría empresarial, jurídico y contable con más de <span class="bold">10 años de experiencia</span> en asesorar y capacitar proyectos de empresas. Brindamos soluciones a las necesidades legales, fiscales y contables de pequeñas y medianas empresas, con los máximos estándares de calidad sostenidos sobre nuestros valores.
                    </p>
                    <p class="text-gotham-book text-justify text-content pb-5">
                        Además de contar con la Asesoría Legal a médicos y personal de la salud, en temas de Responsabilidad Civil Profesional, con paquetes completos para cubrir el ejercicio de su profesión con su póliza de seguro.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="us-section" class="us-section bg-transparent">
        <div class="container p-lg-5">
            <div class="row px-lg-5">
                <div class="col pb-3 pb-lg-3 pt-3 pt-lg-0">
                    <span class="text-candara-bold section-title">
                        Nosotros
                    </span>
                    <p class="text-gotham-book text-justify text-content">
                        Somos una consultoría empresarial, jurídico y contable con más de <span class="bold">10 años de experiencia</span> en asesorar y capacitar proyectos de empresas. Brindamos soluciones a las necesidades legales, fiscales y contables de pequeñas y medianas empresas, con los máximos estándares de calidad sostenidos sobre nuestros valores.
                    </p>
                    <p class="text-gotham-book text-justify text-content pb-5">
                        Además de contar con la Asesoría Legal a médicos y personal de la salud, en temas de Responsabilidad Civil Profesional, con paquetes completos para cubrir el ejercicio de su profesión con su póliza de seguro.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="mission-section" class="mission-section position-relative py-5">
        <img src="{{ asset('image/isotipo_CC-01.svg') }}" class="img-fluid us-logo" alt="C & C" title="C & C">
        <div class="container pt-4">
            <div class="row">
                <div class="col-12 col-lg px-0 px-4 mb-4 mb-lg-0">
                    <span class="text-candara-bold section-title">
                        Misión
                    </span>
                    <p class="text-gotham-book text-justify text-content">
                        Brindar soluciones a las necesidades legales, fiscales y contables de pequeñas y medianas empresas nacionales en México, con los máximos estándares de calidad sostenidos sobre los valores de la lealtad y honestidad.
                    </p>
                </div>
                <div class="col-12 col-lg px-0 px-4 mb-4 mb-lg-0">
                    <span class="text-candara-bold section-title">
                        Visión
                    </span>
                    <p class="text-gotham-book text-justify text-content">
                        Consolidar una empresa que brinde soluciones a nuestros clientes de manera eficaz, ética y moral, innovando en la calidad de nuestros servicios, para llegar a ser la primera opción de nuestros clientes en la solución de necesidades legales, fiscales y contables de pequeñas y medianas empresas nacionales en México.
                    </p>
                </div>
                <div class="col-12 col-lg px-0 px-4 mb-lg-0">
                   <span class="text-candara-bold section-title">
                        Valores
                    </span>
                    <p class="text-gotham-book text-content">
                        Honestidad, Lealtad, Responsabilidad, Seguridad, Innovación, Ética y Moral.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="model-section" class="model-section">
        <div class="container py-4">
            <div class="row mb-5">
                <div class="col">
                    <span class="text-candara-bold section-title">
                        Modelo de Trabajo
                    </span>
                    <img src="{{ asset('image/modelo_CC.png') }}" alt="Modelo de Trabajo" title="Modelo de Trabajo" class="img-fluid img-model my-5">
                    <div class="w-100 text-right">
                        <a class="btn btn-primary" href="{{ route('services') }}">
                            Servicios
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="medical-section" class="medical-section">
        <div class="container py-4">
            <div class="row">
                <div class="col-12 mb-5 mb-lg-2">
                    <span class="text-candara-bold section-title">
                        Médico Legal
                    </span>
                </div>
                <div class="col-12 col-lg-6 p-0 m-0 img-medical-container">
                    <img src="{{ asset('image/s-medico_CC.png') }}" alt="Médico Legal" class="medical-img mt-lg-0">
                </div>
                <div class="col-12 col-lg-6 content-medical pt-lg-5 pb-lg-5">
                    <p class="text-subtitle text-gotham-book mb-5 mt-lg-5">
                        <span class="bold">Asesoría legal</span> con <span class="bold">coberturas de responsabilidad civil profesional</span> y <span class="bold">póliza de seguro</span> personalizada.
                    </p>
                </div>
                <div class="w-100 text-right">
                    <a class="btn btn-secondary text-medical" href="{{ route('medical') }}">
                        Ver más
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="team-section" class="team-section">
        <div class="container py-4">
            <div class="row">
                <div class="col mb-5">
                    <span class="text-candara-bold section-title">
                        Equipo
                    </span>
                    <div class="image-team text-center mb-1">
                        <img src="{{ asset('image/cinthya-img_CC-01.png') }}" alt="Cinthya Zaragoza Ortiz" class="img-fluid team-member">
                        <img src="{{ asset('image/dario-img_CC-01.png') }}" alt="Jesús Dario Colin Ortiz" class="img-fluid team-member">
                        <img src="{{ asset('image/judith-img_CC-01.png') }}" alt="Judith Adriana Córdoba Acosta" class="img-fluid team-member">
                    </div>
                    <div class="image-team text-center">
                        <img src="{{ asset('image/1_CC.jpg') }}" alt="Otniel González Murillo" class="img-fluid team-member">
                        <img src="{{ asset('image/4_CC.jpg') }}" alt="Miguel Calderón Trujillo" class="img-fluid team-member">
                        <img src="{{ asset('image/2_CC.jpg') }}" alt="Adriana Sofía Zavala Borjón" class="img-fluid team-member">
                        <img src="{{ asset('image/3_CC.jpg') }}" alt="José Virgilio Silva Solorio" class="img-fluid team-member">
                    </div>
                    <p class="text-subtitle text-gotham-book mt-5 mb-4 text-center">
                        <span class="bold">¡Confía</span> que tu caso será asesorado <span class="bold">por los mejores!</span>
                    </p>
                    <div class="w-100 text-right">
                        <a class="btn btn-primary" href="{{ route('team') }}">
                            Conoce más
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
