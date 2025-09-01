@extends('layouts.layout')

@section('title', 'Главная')

@section('main')

    @include('partials.header')

    <div class="main" style="background-image: url({{ asset('/icons/img.svg') }})")>
        <h2 class="news-h" style="text-align: center;">Выставки музея</h2>

        <div class="cards">
            @foreach ($exhibs as $exhib)
                @if ($exhib->visible == 'on')
                    <div class="card">
                        <h2>{{ $exhib->name }}</h2>
                        <p>{{ $exhib->desc }}</p>
                        <p style="margin-top: 20px"><em>{{ $exhib->date }}</em></p>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

   @include('partials.footer')

@endsection
