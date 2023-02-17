@extends('layout.master')

@section('page_title', 'Home')

@push('styles')
    <link href="{{ asset('css/main/testimony.css') }}" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/testimony.js') }}"></script>
@endpush

@section('content')
    <div id="main-section" class="main-section mx-5">
        <div class="row p-5 m-0">
            <div class="col-12 m-0 text-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLRQ_zKZ8E8omFMX9KID2edqrZuSTjA4Yq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection
