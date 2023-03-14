@extends('layout.master')

@section('page_title', 'Home')

@push('styles')
    <link href="{{ asset('css/main/bot_working.css') }}" media="screen" rel="stylesheet">
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
        </div>
    </div>
@endsection
