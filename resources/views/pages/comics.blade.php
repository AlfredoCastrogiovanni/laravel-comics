@extends('layouts.app')

@section('title', 'DC - Comics')

@section('main-content')
    <section class="hero">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron image">
    </section>

    <section class="comics">
        <div class="container">
            <span class="title">Current Series</span>
            <div class="wrapper">
                @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <p>{{ $comic['series'] }}</p>
                </div>
                @endforeach
            </div>
            <div class="button-wrapper">
                <button>Load More</button>
            </div>
        </div>
    </section>
@endsection