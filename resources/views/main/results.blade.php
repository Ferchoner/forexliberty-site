<?php
/** @var $videoList Array */
?>

@extends('layout.master')

@section('page_title', 'Home')

@push('styles')
    <link href="{{ asset('css/main/results.css') }}" media="screen" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/main/results.js') }}"></script>
@endpush

@section('content')
    <div id="main-section" class="main-section mx-5">
        <div class="row p-5 m-0">
            <div class="col-12 m-0 text-center">
                <iframe src="https://www.youtube.com/embed/videoseries?list=PLRQ_zKZ8E8olCMlUAju2k1GjyWZ-POZq_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div id="videos-section" class="videos-section mx-5">
        <div class="row p-5 m-0">
            @foreach($videoList as $data)
                <div class="col-12 col-md-6 col-lg-4 m-0 video-item-content">
                    <iframe src="https://www.youtube.com/embed/{{ $data->video_id }}" title="{{ $data->video_title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            @endforeach
        </div>
    </div>
    <div id="slide-section" class="slide-section mx-5 px-5">
        <div class="row p-5 m-0">
            <div class="col-12 text-container">
                <p class="text-data-title text-montserrat-semibold text-center">
                    Consulta resultados <br>
                    de una cuenta real
                </p>
            </div>
            <div class="col-12 img-cont py-4">
                <div id="carouselResults" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button data-bs-target="#carouselResults" data-bs-slide-to="0" aria-label="Restultados 0" class="active" aria-current="true"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="1" aria-label="Restultados 1"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="2" aria-label="Restultados 2"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="3" aria-label="Restultados 3"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="4" aria-label="Restultados 4"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="5" aria-label="Restultados 5"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="6" aria-label="Restultados 6"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="7" aria-label="Restultados 7"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="8" aria-label="Restultados 8"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="9" aria-label="Restultados 9"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="10" aria-label="Restultados 10"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="11" aria-label="Restultados 11"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="12" aria-label="Restultados 12"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="13" aria-label="Restultados 13"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="14" aria-label="Restultados 14"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="15" aria-label="Restultados 15"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="16" aria-label="Restultados 16"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="17" aria-label="Restultados 17"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="18" aria-label="Restultados 18"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="19" aria-label="Restultados 19"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="20" aria-label="Restultados 20"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="21" aria-label="Restultados 21"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="22" aria-label="Restultados 22"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="23" aria-label="Restultados 23"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="24" aria-label="Restultados 24"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="25" aria-label="Restultados 25"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="26" aria-label="Restultados 26"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="27" aria-label="Restultados 27"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="28" aria-label="Restultados 28"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="29" aria-label="Restultados 29"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="30" aria-label="Restultados 30"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="31" aria-label="Restultados 31"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="32" aria-label="Restultados 32"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="33" aria-label="Restultados 33"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="34" aria-label="Restultados 34"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="35" aria-label="Restultados 35"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="36" aria-label="Restultados 36"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="37" aria-label="Restultados 37"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="38" aria-label="Restultados 38"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="39" aria-label="Restultados 39"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="40" aria-label="Restultados 40"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="41" aria-label="Restultados 41"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="42" aria-label="Restultados 42"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="43" aria-label="Restultados 43"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="44" aria-label="Restultados 44"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="45" aria-label="Restultados 45"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="46" aria-label="Restultados 46"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="47" aria-label="Restultados 47"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="48" aria-label="Restultados 48"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="49" aria-label="Restultados 49"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="50" aria-label="Restultados 50"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="51" aria-label="Restultados 51"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="52" aria-label="Restultados 52"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="53" aria-label="Restultados 53"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="54" aria-label="Restultados 54"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="55" aria-label="Restultados 55"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="56" aria-label="Restultados 56"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="57" aria-label="Restultados 57"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="58" aria-label="Restultados 58"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="59" aria-label="Restultados 59"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="60" aria-label="Restultados 60"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="61" aria-label="Restultados 61"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="62" aria-label="Restultados 62"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="63" aria-label="Restultados 63"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="64" aria-label="Restultados 64"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="65" aria-label="Restultados 65"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="66" aria-label="Restultados 66"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="67" aria-label="Restultados 67"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="68" aria-label="Restultados 68"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="69" aria-label="Restultados 69"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="70" aria-label="Restultados 70"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="71" aria-label="Restultados 71"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="72" aria-label="Restultados 72"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="73" aria-label="Restultados 73"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="74" aria-label="Restultados 74"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="75" aria-label="Restultados 75"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="76" aria-label="Restultados 76"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="77" aria-label="Restultados 77"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="78" aria-label="Restultados 78"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="79" aria-label="Restultados 79"></button>
                        <button data-bs-target="#carouselResults" data-bs-slide-to="80" aria-label="Restultados 80"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('image/resultados01.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados02.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados03.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados04.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados05.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados06.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados07.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados08.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados09.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados10.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados11.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados12.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados13.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados14.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados15.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados16.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados17.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados18.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados19.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados20.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados21.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados22.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados23.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados24.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados25.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados26.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados27.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados28.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados29.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados30.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados31.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados32.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados33.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados34.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados35.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados36.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados37.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados38.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados39.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados40.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados41.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados42.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados43.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados44.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados45.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados46.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados47.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados48.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados49.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados50.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados51.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados52.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados53.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados54.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados55.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados56.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados57.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados58.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados59.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados60.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados61.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados62.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados63.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados64.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados65.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados66.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados67.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados68.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados69.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados70.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados71.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados72.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados73.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados74.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados75.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados76.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados77.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados78.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados79.webp') }}" class="d-block" alt="Resultados">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/resultados80.webp') }}" class="d-block" alt="Resultados">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselResults" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselResults" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
