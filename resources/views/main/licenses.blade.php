@extends('layout.master')

@section('page_title', 'Home')

@push('styles')
    <link href="{{ asset('css/main/licenses.css') }}" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/licenses.js') }}"></script>
@endpush

@section('content')
    <div id="main-section" class="main-section mx-5">
        <div class="row p-5 m-0">
            <div class="col-12 col-md-7 m-0 text-container">
                <div>
                    <p class="text-data-title text-montserrat-semibold">
                        Puedes pagar la diferencia para cambiar de licencia el primer mes.
                    </p>
                    <p class="text-data-info text-montserrat-regular">
                        Ejemplo: Si compras la licencia premium, tienes un mes para pagar la diferencia de $50 USD y cambiarte a la licencia GOLD.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-5 img-container ps-5 text-center">
                <img src="{{ asset('image/descuento_FXL.svg') }}" alt="¡Promoción!">
            </div>
        </div>
        <div class="row p-5">
            <div class="col-12 data-table text-center">
                <img src="{{ asset('image/tabla_FXL.svg') }}" alt="Datos de planes">
                <p class="text-center button-cont">
                    <a class="hangout-button mb-2 mt-4 text-decoration-none text-montserrat-semibold" href="#videollamada">
                        Explicación completa
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
