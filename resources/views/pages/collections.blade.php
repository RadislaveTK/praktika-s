@extends('layouts.layout')

@section('title', 'Главная')

@section('main')

    @include('partials.header')

    <div class="main"
        style="background-image: url({{ asset('/icons/img.svg') }});background-size: cover;background-repeat: no-repeat;background-position: center;"
        )="">

        <h2 class="news-h" style="text-align: center;">Выставки музея</h2>

        <div class="cards">
            @foreach ($collections as $collection)
                @if ($collection->visiable == 'on')
                    <div class="card">
                        @auth
                            <button>Удалить</button>
                        @endauth
                        <img src="{{ $collection->img }}" alt="img">
                        <h2>{{ $collection->name }}</h2>
                        <p>{{ $collection->desc }}</p>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    @include('partials.footer')

@endsection
