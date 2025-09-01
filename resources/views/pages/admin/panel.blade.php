@extends('layouts.layout')

@section('title', 'Главная')

@section('main')
    @include('partials.header')

    <div class="main">
        <div style="display: flex;align-items: center;flex-direction: row;justify-content: center;">
            <h1 class="login-h">Админ панель</h1>
            <form action="/admin/logout" method="post" class="logout">
                @csrf
                <button class="btn" type="submit">Выйти</button>
            </form>
        </div>

        <div class="cards" style="margin-top: 50px">
            <form action="{{ route('ticket.verify') }}" method="get" class="login">
                @csrf
                <h2 style="color: #b5964d">Билет</h2>
                <div class="inp">
                    <label for="code">Код</label>
                    <input type="text" name="code" id="code" placeholder="Код">
                </div>
                <button class="btn" type="submit">Проверить</button>
            </form>

            <form action="{{ route('news.create') }}" method="post" class="login">
                @csrf
                <h2 style="color: #b5964d">Новости</h2>
                <div class="inp">
                    <label for="name">Название</label>
                    <input type="text" name="name" id="name" placeholder="Название">
                </div>
                <div class="inp">
                    <label for="desc">Описание</label>
                    <input type="text" name="desc" id="desc" placeholder="Описание">
                </div>
                <div class="inp">
                    <label for="visiable">Видно</label>
                    <input type="checkbox" name="visiable" id="visible" placeholder="Видно">
                </div>
                <button class="btn" type="submit">Проверить</button>
            </form>

            <form action="{{ route('exhibitions.create') }}" method="post" class="login">
                @csrf
                <h2 style="color: #b5964d">Выстовки</h2>
                <div class="inp">
                    <label for="name">Название</label>
                    <input type="text" name="name" id="name" placeholder="Название">
                </div>
                <div class="inp">
                    <label for="desc">Описание</label>
                    <input type="text" name="desc" id="desc" placeholder="Описание">
                </div>
                <div class="inp">
                    <label for="date">Дата и время</label>
                    <input type="datetime" name="date" id="date" placeholder="Дата и время">
                </div>
                <div class="inp">
                    <label for="visible">Видно</label>
                    <input type="checkbox" name="visible" id="visible" placeholder="Видно">
                </div>
                <button class="btn" type="submit">Создать</button>
            </form>

            <form action="{{ route('collections.create') }}" method="post" class="login" enctype="multipart/form-data">
                @csrf
                <h2 style="color: #b5964d">Коллекция</h2>
                <div class="inp">
                    <label for="name">Название</label>
                    <input type="text" name="name" id="name" placeholder="Название">
                </div>
                <div class="inp">
                    <label for="desc">Описание</label>
                    <input type="text" name="desc" id="desc" placeholder="Описание">
                </div>
                <div class="inp">
                    <label for="img">Фото</label>
                    <input type="file" name="img" id="img" placeholder="Выберите фото">
                </div>
                <div class="inp">
                    <label for="visible">Видно</label>
                    <input type="checkbox" name="visible" id="visible" placeholder="Видно">
                </div>
                <button class="btn" type="submit">Создать</button>
            </form>
        </div>
    </div>

    @include('partials.footer')
@endsection
