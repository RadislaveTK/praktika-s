@extends('layouts.layout')

@section('title', 'Главная')

@section('main')

    @include('partials.header')

    <div class="welcome">
        <h1><span>Исследуйте мир</span> Классические скульптуры</h1>
        <img src="{{ asset('icons/main.svg') }}" alt="">
    </div>

    <h2 class="news-h">Новости музея</h2>

    <div class="cards">
        @foreach ($news as $new)
            @if ($new->visiable == 'on')
                <div class="card">
                    <h2>{{ $new->name }}</h2>
                    <p>{{ $new->desc }}</p>
                </div>
            @endif
        @endforeach
    </div>

    @include('partials.footer')

@endsection
