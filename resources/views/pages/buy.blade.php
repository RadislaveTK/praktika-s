@extends('layouts.layout')

@section('title', 'Главная')

@push('script')
<script type="text/javascript">
    let price;
    let count = document.getElementById('count').value;
    let div = document.createElement('div');
    let div1 = document.createElement('div');
    let closeBtn = document.createElement('button');

    const changePrice = (e) => {
        count = Number(e.target.value); // преобразуем в число
        price = count * 550;
        document.getElementById("opl").innerText = (price > 0) ? `Оплатить ${price}` : `Оплатить`;
    }

    async function subF(e) {
        e.preventDefault();

        if (count > 0) {
            const response = await fetch("/tickets/buy", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                    "Accept": "application/json"
                },
                body: JSON.stringify({
                    exhib_id: document.getElementById('from').value,
                    count: count
                })
            });

            const data = await response.json();
            console.log(data);

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


            for (let i = 0; i < data.keys.length; i++) {
                // div1.innerHTML = div1.innerHTML + `<span><h3>Билет ${i+1}:</h3><p>${data.keys[i]}</p></span>`;
                div1.insertAdjacentHTML("beforeend", `<span><h3>Билет ${i+1}:</h3><p>${data.keys[i]}</p></span>`);
            }

            document.getElementById('main').appendChild(div);
        }
    }
</script>
@endpush

@section('main')

@include('partials.header')

<div class="main" id="main"
    style="background-image: url({{ asset('/icons/img1.png') }}); background-size: auto;background-repeat: no-repeat;background-position: center;display: flex;flex-direction: column;align-items: center;justify-content: center;">

    <form class="ticket">
        @csrf
        <h2 class="news-h" style="text-align: center;">Покупка билета Стоимость: 550 тг</h2>
        <div class="inp">
            <label for="from">Куда</label>
            <select name="from" id="from">
                @foreach ($exhibs as $exhib)
                <option value="{{ $exhib->id }}">{{ $exhib->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="inp">
            <label for="count">Количество</label>
            <input required type="text" name="count" id="count" value="0" placeholder="Количество" oninput="changePrice(event)">
        </div>
        <button class="btn" id="opl" onclick="subF(event)">Оплатить</button>
    </form>

</div>

@include('partials.footer')

@endsection