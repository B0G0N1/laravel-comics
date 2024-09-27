@extends('layouts.app')

@section('content')
    <div id="jumbotron">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>
    </div>

    <div id="comics-container">
        <div class="container">
            <div class="row title px-4 py-2">
                <p class="fw-bold mb-0">CURRENT SERIES</p>
            </div>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="comic-card border-0 m-1">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                            </div>
                            <div class="card-body">
                                <span class="text-uppercase">{{ $comic['series'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="adv">
        <div class="container white">
            <div class="row">
                <div class="col">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="DC Comics">
                    <span class="ms-2">DIGITAL COMICS</span>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="DC Comics">
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="DC Comics">
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="DC Comics">
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="DC Comics">
                    <span>DIGITAL COMICS</span>
                </div>
            </div>
        </div>
    </div>
@endsection
