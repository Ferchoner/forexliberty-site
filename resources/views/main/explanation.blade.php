@extends('layout.master')

@section('page_title', 'Home')

@push('styles')
    <link href="{{ asset('css/main/explanation.css') }}" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/explanation.js') }}"></script>
@endpush

@section('content')
    <div id="main-section" class="main-section mx-2 mx-md-5">
        <div class="row p-5 px-2 px-md-5 m-0">
            <div class="col-12 m-0 text-center">
                <iframe src="https://www.youtube.com/embed/ASVqGbwLk9k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection
