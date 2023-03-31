@extends('layout.master')

@section('page_title', 'Home')

@push('styles')
    <link href="{{ asset('css/main/bot_working.css') }}?v=1.0" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/bot_working.js') }}"></script>
@endpush

@section('content')
    <div id="main-section" class="main-section mx-2 mx-md-5">
        <div class="row px-2 px-md-5 p-5 m-0">
            <div class="col-12 m-0 text-center">
                <iframe src="https://www.youtube.com/embed/4_POpy3oyCk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-12 text-center px-3 px-md-5 py-5 d-lg-none">
                <p class="m-0 p-2">
                    @include('layout.schedule-a-call', ['message' => 'Agenda una videollamada'])
                </p>
            </div>
        </div>
    </div>
@endsection
