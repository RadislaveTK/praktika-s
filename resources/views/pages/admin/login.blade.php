@extends('layouts.layout')

@section('title', 'Главная')

@section('main')
    @include('partials.header')

    <div class="main">
        <h1 class="login-h">Админ панель</h1>
        <form action="/admin/login" method="post" class="login">
            @csrf
            <div class="inp">
                <label for="name">Имя</label>
                <input type="text" name="name" id="name" placeholder="Имя">
            </div>
            <div class="inp">
                <label for="password">Пароль</label>
                <input type="password" name="password" id="password" placeholder="Пароль">
            </div>
            <button class="btn" type="submit">Войти</button>
        </form>
    </div>

    @include('partials.footer')
@endsection
