@extends('layout.master')

@section('page_title', 'Contactanos')

@push('styles')
    <link href="{{ asset('css/main/contact.css') }}?v=1.0" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/contact.js') }}"></script>
@endpush

@section('content')
<div class="row form-section w-100 h-100 align-content-center m-0 p-0 mt-5">
    <div class="container mt-5">
        <div class="row pb-5 pb-lg-0">
            <div class="col col-12 col-lg-6 text-center contact-message">
                <span class="text-candara-bold section-title">
                    Agenda una cita
                </span>
                <p class="text-gotham-medium text-center text-content">
                    Estamos listos para brindarte la mejor atención.
                </p>
                <div class="text-location mb-5">
                    <img src="{{ asset('image/ubicacion_CC.svg') }}" alt="Ubicación">
                    <p class="text-gotham-medium text-center text-content">
                        Av. Periodísmo José Tocaven Lavín #1037, Agustín Arriaga Rivera, C.P. 58190, Morelia, Michoacán.
                    </p>
                </div>
            </div>
            <div class="col col-12 col-lg-6 pb-5 pb-lg-0">
                <div class="form-container pb-5 pb-lg-0">
                    <form action="{{ route('save-form') }}" method="post" class="contact-form px-4">
                        @csrf
                        @if ($errors->any())
                            <div class="form-group">
                                <label for="full_name" class="text-gotham-medium error_message">
                                    El formulario contiene errores, por favor revisalos para poder continuar
                                </label>
                            </div>
                        @endif
                        @if (session('message'))
                            <div class="form-group">
                                <label for="full_name" class="text-gotham-medium success_message">
                                    {{ session('message') }}
                                </label>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="full_name" class="text-gotham-medium">
                                Nombre
                            </label>
                            <input type="text" required class="form-control @error('full_name') is_invalid @enderror" name="full_name" placeholder="Ingresa tu nombre completo" value="{{ old('full_name', '') }}">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="text-gotham-medium">
                                Teléfono
                            </label>
                            <input type="text" required class="form-control @error('phone') is_invalid @enderror" name="phone" placeholder="Ingresa tu número de teléfono" value="{{ old('phone', '') }}">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-gotham-medium">
                                Correo electrónico
                            </label>
                            <input id="subject"  type="email" required class="form-control @error('email') is_invalid @enderror" name="email" placeholder="Ingresa tu correo electrónico" value="{{ old('email', '') }}">
                        </div>
                        <div class="form-group">
                            <label for="subject" class="text-gotham-medium">
                                Asunto
                            </label>
                            <input id="subject" type="text" required class="form-control @error('subject') is_invalid @enderror" name="subject" placeholder="Ingresa el servicio de tu interes" value="{{ old('subject', '') }}">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" required name="message" placeholder="Ingresa tu mensaje" rows="7">{{ old('message', '') }}</textarea>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-primary text-capitalize text-right">
                                Envíar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
