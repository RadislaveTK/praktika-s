@extends('layouts.layout')

@section('title', 'Главная')

@push('script')
    <script type="text/javascript">
        let $price;
        const changePrice = (e) => {
            let $count = e.target.value
            if ($count > 0 && typeof $count == "number") {
                $price = $count * 550;
                document.getElementById("opl").innerText = `Оплатить ${$price}`
            }
        }
    </script>
@endpush

@section('main')

    @include('partials.header')

    <div class="main"
        style="background-image: url({{ asset('/icons/img1.png') }});background-size: auto;background-repeat: no-repeat;background-position: center;"
        )="">

        <form class="ticket">
            <h2 class="news-h" style="text-align: center;">Покупка билета | Стоимость: 550 тг</h2>
            <div class="inp">
                <label for="count">Количество</label>
                <input type="number" name="count" id="count" placeholder="Количество" onchange="changePrice">
            </div>
            <button id="opl">Оплатить</button>
        </form>

    </div>

    @include('partials.footer')

@endsection
