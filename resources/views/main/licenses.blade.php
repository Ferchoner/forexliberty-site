@extends('layout.master')

@section('page_title', 'Home')

@push('styles')
    <link href="{{ asset('css/main/licenses.css') }}" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/licenses.js') }}"></script>
@endpush

@section('content')
    <div id="main-section" class="main-section mx-3 mx-md-5">
        <div class="row p-2 p-md-5 m-0">
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
        <div class="row px-2 p-5 px-lg-5 pt-2 pt-lg-5">
            <div class="col-12 data-table text-center">
                <img src="{{ asset('image/tabla_FXL.svg') }}" alt="Datos de planes">
                <p class="text-center button-cont">
                    @include('layout.schedule-a-call', ['message' => 'Agenda una videollamada'])
                </p>
            </div>
        </div>
    </div>
@endsection
