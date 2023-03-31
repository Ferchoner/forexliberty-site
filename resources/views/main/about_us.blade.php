@extends('layout.master')

@section('page_title', 'Home')

@push('styles')
    <link href="{{ asset('css/main/about_us.css') }}" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/about_us.js') }}"></script>
@endpush

@section('content')
    <div id="main-section" class="main-section mx-2 mx-md-5">
        <div class="row p-5 px-2 px-md-5 m-0">
            <div class="col-12 col-xl-6 img-container text-center">
                <img src="{{ asset('image/dispositivos_FXL.svg') }}" alt="Datos">
            </div>
            <div class="col-12 col-xl-6 m-0 text-container">
                <p class="text-data-title text-montserrat-semibold text-center">
                    Vimos que había dos grandes problemas;
                </p>
                <p class="text-data-info text-montserrat-regular mb-3 mb-md-5 px-0 px-md-5">
                    Muchas personas perdiendo dinero del trading, y muchas otras que querían generar ingresos de los mercados bursátiles, pero no tenían el tiempo para hacerlo, debido a que el 98% de la población tiene un horario fijo de trabajo, y además dadas las necesidades económicas, es prácticamente imposible que dejen sus trabajos para dedicarle tiempo a aprender algo nuevo, y todavía arriesgarse a perder dinero en el mundo de Forex.
                </p>
                <p class="text-data-info text-montserrat-regular px-0 px-md-5">
                    Por estas dos enormes razones decidimos crear un sistema completamente automático, amigable, confiable, preciso y ganador, para que personas con o sin experiencia en trading puedan generar ingresos pasivos, hemos ayudado a cientos de personas en conseguir la libertad financiera, de ahí nuestro nombre, sabemos que hoy en día hay muchas estafas, y que es difícil hacer que la gente confíe, aún y cuando tenemos algo que realmente funciona, pero no pararemos de ayudar a los que estén listos y dispuestos a alcanzar su libertad financiera!
                </p>
            </div>
            <div class="col-12 text-center px-3 px-md-5 py-5 d-lg-none">
                <p class="m-0 p-2 pb-5">
                    @include('layout.schedule-a-call', ['message' => 'Agenda una videollamada'])
                </p>
            </div>
        </div>
    </div>
@endsection
