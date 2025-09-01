@extends('layouts.layout')

@section('title', 'Главная')

@section('main')
    @include('partials.header')

    <div class="welcome">
        <h1><span>Исследуйте мир</span> Классические скульптуры</h1>
        <img src="{{ asset('icons/main.svg') }}" alt="">
    </div>

    <div class="cards-statue">
        <div class="card">
            <h3 class="card-h">Римская мраморная репродукция «Дискобола» Мирона, II век н. э.</h3>
            <p class="card-p">«Прекрасное тело в Древней Греции» — крупная международная передвижная выставка, представляющая
                сокровища из богатой греческой и римской коллекции Британского музея. В настоящее время выставка проходит в
                Художественном музее Далласа (до 6 октября 2013 года), а затем будет представлена ​​в Художественной галерее
                Бендиго (Австралия) в августе 2014 года. Ранее она проходила в Художественном музее Портленда (с 6 октября
                2012 года по 6 января 2013 года).</p>
            <img src="{{ asset('icons/statue1.svg') }}" alt="g">
            <span class="card-l" style="height: 215px;"></span>
        </div>
        <div class="card">
            <h3 class="card-h">Римская мраморная репродукция «Дискобола» Мирона, II век н. э.</h3>
            <p class="card-p">«Прекрасное тело в Древней Греции» — крупная международная передвижная выставка,
                представляющая сокровища из богатой греческой и римской коллекции Британского музея. В настоящее время
                выставка проходит в Художественном музее Далласа (до 6 октября 2013 года), а затем будет представлена ​​в
                Художественной галерее Бендиго (Австралия) в августе 2014 года. Ранее она проходила в Художественном музее
                Портленда (с 6 октября 2012 года по 6 января 2013 года).</p>
            <img src="{{ asset('icons/statue2.svg') }}" alt="g">
            <span class="card-l" style="height: 270px;"></span>
        </div>
        <div class="card">
            <h3 class="card-h">Римская мраморная репродукция «Дискобола» Мирона, II век н. э.</h3>
            <p class="card-p">«Прекрасное тело в Древней Греции» — крупная международная передвижная выставка,
                представляющая сокровища из богатой греческой и римской коллекции Британского музея. В настоящее время
                выставка проходит в Художественном музее Далласа (до 6 октября 2013 года), а затем будет представлена ​​в
                Художественной галерее Бендиго (Австралия) в августе 2014 года. Ранее она проходила в Художественном музее
                Портленда (с 6 октября 2012 года по 6 января 2013 года).</p>
            <img src="{{ asset('icons/statue3.svg') }}" alt="g">
            <span class="card-l" style="height: 235px;"></span>
        </div>
        <div class="card">
            <h3 class="card-h">Римская мраморная репродукция «Дискобола» Мирона, II век н. э.</h3>
            <p class="card-p">«Прекрасное тело в Древней Греции» — крупная международная передвижная выставка,
                представляющая сокровища из богатой греческой и римской коллекции Британского музея. В настоящее время
                выставка проходит в Художественном музее Далласа (до 6 октября 2013 года), а затем будет представлена ​​в
                Художественной галерее Бендиго (Австралия) в августе 2014 года. Ранее она проходила в Художественном музее
                Портленда (с 6 октября 2012 года по 6 января 2013 года).</p>
            <img src="{{ asset('icons/statue4.svg') }}" alt="g">
            <span class="card-l" style="height: 110px;"></span>
        </div>
        <div class="card">
            <h3 class="card-h">Римская мраморная репродукция «Дискобола» Мирона, II век н. э.</h3>
            <p class="card-p">«Прекрасное тело в Древней Греции» — крупная международная передвижная выставка,
                представляющая сокровища из богатой греческой и римской коллекции Британского музея. В настоящее время
                выставка проходит в Художественном музее Далласа (до 6 октября 2013 года), а затем будет представлена ​​в
                Художественной галерее Бендиго (Австралия) в августе 2014 года. Ранее она проходила в Художественном музее
                Портленда (с 6 октября 2012 года по 6 января 2013 года).</p>
            <img src="{{ asset('icons/statue5.svg') }}" alt="g">
            <span class="card-l" style="height: 295px;"></span>
        </div>
        <div class="card">
            <h3 class="card-h">Римская мраморная репродукция «Дискобола» Мирона, II век н. э.</h3>
            <p class="card-p">«Прекрасное тело в Древней Греции» — крупная международная передвижная выставка,
                представляющая сокровища из богатой греческой и римской коллекции Британского музея. В настоящее время
                выставка проходит в Художественном музее Далласа (до 6 октября 2013 года), а затем будет представлена ​​в
                Художественной галерее Бендиго (Австралия) в августе 2014 года. Ранее она проходила в Художественном музее
                Портленда (с 6 октября 2012 года по 6 января 2013 года).</p>
            <img src="{{ asset('icons/statue6.svg') }}" alt="g">
            <span class="card-l" style="height: 260px;"></span>
        </div>
    </div>

    <div class="home-about">
        <div class="home-about-h">
            <h2>Исторический музей цезаря</h2>
            <h3>О музее</h3>
        </div>

        <p class="home-about-t"><span>[ENG]</span> The Greek Statues Museum is a prominent cultural institution that houses
            an extensive collection of ancient Greek statues, sculptures, and artifacts. The museum is located in Athens,
            Greece, and is one of the most visited tourist destinations in the city.
            <br><br>
            The collection of the Greek Statues Museum dates back to the Classical period of ancient Greece, spanning from
            the 5th century BCE to the 4th century CE. The collection includes works from prominent Greek sculptors such as
            Phidias, Polykleitos, and Praxiteles, as well as pieces from lesser-known artists.
            <br><br>
            One of the most notable works in the collection is the statue of Athena Parthenos, which was created by Phidias
            in the 5th century BCE. The statue stands over 30 feet tall and was originally housed in the Parthenon on the
            Acropolis in Athens. The museum also has a collection of smaller works, such as busts and reliefs, which provide
            insight into the everyday life and culture of ancient Greece.
            <br><br>
            The museum's architecture is designed to complement the ancient works on display. The building itself is
            constructed with marble and features columns, arches, and other elements of ancient Greek architecture. The
            exhibits are displayed in spacious galleries with natural light, providing visitors with a comfortable and
            immersive viewing experience.
            Visitors to the Greek Statues Museum can take guided tours to learn more about the history and significance of
            the collection. The museum also offers educational programs for schools and universities, as well as special
            events and exhibitions throughout the year.
            <br><br>
            Overall, the Greek Statues Museum is an essential destination for anyone interested in ancient Greek culture and
            history. Its collection of statues and artifacts provides a glimpse into one of the most influential periods in
            human civilization, and its architecture and exhibits make for a truly memorable experience.
        </p>
        <p class="home-about-t"><span>[RUS]</span> Музей греческих статуй — выдающееся культурное учреждение, хранящее
            обширную коллекцию древнегреческих статуй, скульптур и артефактов. Музей расположен в Афинах, Греция, и является
            одним из самых посещаемых туристических мест города.
            <br><br>
            Коллекция Музея греческих статуй охватывает классический период Древней Греции, с V века до н. э. по IV век н.
            э. В коллекции представлены работы выдающихся греческих скульпторов, таких как Фидий, Поликлет и Пракситель, а
            также работы менее известных мастеров.
            <br><br>
            Одной из самых примечательных работ коллекции является статуя Афины Парфенос, созданная Фидием в V веке до н. э.
            Статуя высотой более 9 метров первоначально находилась в Парфеноне на Акрополе в Афинах. В музее также
            представлена ​​коллекция более мелких произведений, таких как бюсты и рельефы, которые дают представление о
            повседневной жизни и культуре Древней Греции.
            <br><br>
            Архитектура музея гармонично дополняет экспонируемые древние произведения. Само здание построено из мрамора и
            украшено колоннами, арками и другими элементами древнегреческой архитектуры. Экспонаты размещены в просторных
            галереях с естественным освещением, что обеспечивает посетителям комфортный и захватывающий просмотр.
            Посетители Музея греческих статуй могут заказать экскурсии, чтобы узнать больше об истории и значении коллекции.
            Музей также предлагает образовательные программы для школ и университетов, а также специальные мероприятия и
            выставки в течение года.
            <br><br>
            В целом, Музей греческих статуй — обязательное место для посещения всем, кто интересуется культурой и историей
            Древней Греции. Его коллекция статуй и артефактов позволяет заглянуть в один из самых влиятельных периодов в
            истории человеческой цивилизации, а его архитектура и экспонаты подарят вам поистине незабываемые впечатления.
        </p>
    </div>

    <div class="home-faq">
        <div class="home-faq-h">
            <h2>Исторический музей цезаря</h2>
            <h3>О музее</h3>
        </div>

        <section>
            <details>
                <summary>Можно ли посетителям фотографировать в музее?</summary>
                <p>Фотографировать в греческих музеях, как правило, разрешено, но использование вспышки и штативов, как
                    правило, запрещено. Однако всегда лучше проконсультироваться с сотрудниками музея, прежде чем делать
                    какие-либо снимки.</p>
            </details>
            <details>
                <summary>Какие типы артефактов можно найти в музее?</summary>
                <p>Фотографировать в греческих музеях, как правило, разрешено, но использование вспышки и штативов, как
                    правило, запрещено. Однако всегда лучше проконсультироваться с сотрудниками музея, прежде чем делать
                    какие-либо снимки.</p>
            </details>
            <details>
                <summary>В какое время открыт музей?</summary>
                <p>Фотографировать в греческих музеях, как правило, разрешено, но использование вспышки и штативов, как
                    правило, запрещено. Однако всегда лучше проконсультироваться с сотрудниками музея, прежде чем делать
                    какие-либо снимки.</p>
            </details>
            <details>
                <summary>Почему музей назван в честь Цезаря?</summary>
                <p>Фотографировать в греческих музеях, как правило, разрешено, но использование вспышки и штативов, как
                    правило, запрещено. Однако всегда лучше проконсультироваться с сотрудниками музея, прежде чем делать
                    какие-либо снимки.</p>
            </details>
        </section>
    </div>

    @include('partials.footer')
@endsection
