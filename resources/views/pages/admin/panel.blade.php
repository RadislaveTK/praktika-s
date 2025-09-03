@extends('layouts.layout')

@section('title', 'Главная')

@push('script')
<script type="text/javascript">
    let div = document.createElement('div');
    let div1 = document.createElement('div');
    let closeBtn = document.createElement('button');
    let code;

    const changeKey = (e) => code = e.target.value;

    async function subF(e) {
        e.preventDefault();

        if (code) {
            const response = await fetch("/ticket/verify", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                    "Accept": "application/json"
                },
                body: JSON.stringify({
                    code: document.getElementById('code').value,
                })
            });

            const data = await response.json();
            console.log(data);

            if (data.success === true) {

                const close = () => div.remove();

                div.setAttribute('class', "modal-back");
                div.addEventListener("click", close);

                div1.setAttribute('class', "modal");
                div1.addEventListener("click", (e) => e.stopPropagation())

                closeBtn.addEventListener("click", close);
                closeBtn.style.backgroundImage = "url({{ asset('/icons/close.svg ') }})";

                div1.innerHTML = "";

                div1.appendChild(closeBtn);
                div.appendChild(div1);

                div1.insertAdjacentHTML("beforeend", `<span><h3>Билет найден:</h3><p>${data.key}</p></span>`);

                document.getElementById('main').appendChild(div);
            } else {
                alert("Код не найден");
            }
        }
    }
</script>
@endpush

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
        <form class="login">
            @csrf
            <h2 style="color: #b5964d">Билет</h2>
            <div class="inp">
                <label for="code">Код</label>
                <input type="text" required name="code" id="code" placeholder="Код" onchange="changeKey">
            </div>
            <button class="btn" onclick="subF(event)">Проверить</button>
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