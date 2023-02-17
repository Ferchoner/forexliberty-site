@extends('layout.master')

@section('page_title', 'Contactanos')

@push('styles')
    <link href="{{ asset('css/main/contact.css') }}?v=1.0" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/contact.js') }}"></script>
@endpush

@section('content')
    <div id="main-section" class="main-section mx-5">
        <div class="row p-5 m-0">
            <div class="col-12 col-md-6 img-container text-center">
                <p class="text-data-title text-montserrat-semibold text-center">
                    ¡Nos encataría saber de ti!
                </p>
                <p class="text-data-info text-montserrat-regular px-5 mb-5">
                    Nos pondremos en contacto para brindarte más información.
                </p>
            </div>
            <div class="col-12 col-md-6 m-0 px-5 text-container">
                <div class="form-container p-5 mb-5">
                    <form action="{{ route('save-form') }}" method="post" class="contact-form p-2 px-4">
                        @csrf
                        @if ($errors->any())
                            <div class="form-group">
                                <label for="all-form" class="text-montserrat-semibold error_message">
                                    El formulario contiene errores, por favor revisalos para poder continuar <br>
                                    @foreach ($errors->all() as $error)
                                        - {{ __($error) }} <br>
                                    @endforeach
                                </label>
                            </div>
                        @endif
                        @if (session('message'))
                            <div class="form-group">
                                <label for="full_name" class="text-montserrat-semibold success_message">
                                    {{ session('message') }}
                                </label>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="full_name" class="text-montserrat-regular">
                                Nombre
                            </label>
                            <input type="text" required class="form-control @error('full_name') is_invalid @enderror" name="full_name" value="{{ old('full_name', '') }}">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-montserrat-regular">
                                Correo electrónico
                            </label>
                            <input id="subject"  type="email" required class="form-control @error('email') is_invalid @enderror" name="email" value="{{ old('email', '') }}">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="text-montserrat-regular">
                                Teléfono
                            </label>
                            <input type="text" required class="form-control @error('phone') is_invalid @enderror" name="phone" value="{{ old('phone', '') }}">
                        </div>
                        <div class="form-group">
                            <label for="message" class="text-montserrat-regular">
                                Mensaje
                            </label>
                            <textarea class="form-control" required name="message" rows="4">{{ old('message', '') }}</textarea>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary text-capitalize text-center text-montserrat-semibold">
                                Envíar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
