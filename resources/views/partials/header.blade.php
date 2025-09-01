<header>
    <a href="{{ route('home') }}" class="logo">
        <img class="logo-icon" src="{{ asset('icons/icon.svg') }}" alt="logo">
        <div class="logo-text">
            Музей Александра Могилевцева
        </div>
    </a>

    <nav>
        <ul>
            <li><a href="{{ route('news.show') }}">Новости</a></li>
            <li><a href="{{ route('exhibitions.show') }}">Выставки</a></li>
            <li><a href="{{ route('collections.show') }}">Коллекция</a></li>
            <li><a href="">О музее</a></li>
            <li><a href="{{ route('ticket.buy') }}">Билеты</a></li>
        </ul>
    </nav>
</header>
