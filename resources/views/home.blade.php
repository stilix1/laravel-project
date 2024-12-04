@extends('layouts.app')

@section('title', 'home')

@section('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('main')
    <!-- Промо-секция -->
    <div class="section promo-main">
        <h2>Создание Промо-сайтов</h2>
        <p>Промо-сайты - лучший способ привлечения внимания к товару, услуге или событию</p>
        <a href="/promo" class="promo-button">СОЗДАТЬ САЙТ</a>
    </div>

    <!-- Секция возможностей промо-сайтов -->
    <div class="section promo-features">
        <h2>Возможности для промо-сайтов</h2>
        <ul>
            <li>Привлекательный и современный дизайн</li>
            <li>Адаптивность под разные устройства</li>
            <li>Интеграция социальных медиа</li>
            <li>Формы обратной связи</li>
            <li>Оптимизация для поисковых систем</li>
            <li>Быстрая загрузка страниц</li>
            <li>Интеграция аналитики и отслеживание посетителей</li>
            <li>Многоязычность и локализация</li>
            <li>Интеграция с CMS</li>
        </ul>
    </div>

    <!-- Описание услуг -->
    <div class="section service-text">
        <h2>Почему стоит выбрать нашу веб-студию?</h2>
        <p><strong>БЕСПЛАТНАЯ</strong> разработка дизайн-концепции главной страницы сайта до заключения договора</p>
        <p>Чаще всего клиент получает лишь смету на абстрактный сайт. Мы уверены в своем уровне и предлагаем конкретное видение главной страницы сразу.</p>
        <h3>Всегда одна и та же команда специалистов</h3>
        <p>Качество вашего сайта будет точно НЕ ниже уровня работ из портфолио.</p>
        <h3>Равное внимание трём элементам успешного сайта:</h3>
        <ul>
            <li>Стильный дизайн</li>
            <li>Usability (удобство, функциональность)</li>
            <li>SEO</li>
        </ul>
    </div>

    <div class="features-section">
        <!-- Зеленый блок -->
        <div class="feature-block green-block">
            <h3>Найдём тех, кто вам нужен:</h3>
            <p>Автотаргетинг по интересам и контенту</p>
            <p>Алгоритм анализирует заголовки, контент рекламодателя и поведение пользователей в интернете.</p>
            <p>Подбирает для рекламной кампании самых заинтересованных пользователей.</p>
            <p>ПромоСтраницы видят только те люди, которые с большей вероятностью заинтересуются продуктом и перейдут на сайт бренда.</p>
        </div>

        <!-- Синий блок -->
        <div class="feature-block blue-block">
            <h3>Расширенные настройки</h3>
            <ul>
                <li>Точные настройки по полу, возрасту, устройствам и гео</li>
                <li>Интересы</li>
                <li>Сегменты аудитории:
                    <ul>
                        <li>Look-alike</li>
                        <li>Исключение сегмента</li>
                        <li>Кастомные сегменты</li>
                    </ul>
                </li>
                <li>Доступно для размещения от 500 000 ₽ в месяц при наличии технической возможности</li>
            </ul>
        </div>
    </div>

    <!-- Портфолио -->
    <div class="section portfolio">
        <h2>Портфолио</h2>
        <div class="portfolio-gallery">
            @foreach($projects as $project)
                <a href="{{ route('project.show', $project->slug) }}">
                    <img src="{{ asset($project->logo) }}" alt="{{ $project->title }}">
                </a>
            @endforeach
        </div>
        <!-- Кнопка "Смотреть больше" -->
        <div class="view-more-button">
            <a href="{{ route('portfolio') }}" class="btn btn-primary">Смотреть больше</a>
        </div>
    </div>
@endsection
