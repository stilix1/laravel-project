@extends('layouts.app')

@section('title')
    Создать промо-страницу
@endsection

@section('fonts')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/promo/sony.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <!-- Основной блок с изображением и текстом -->
        <section class="main-section">
            <div class="text-content">
                <h2>Кейс разработки лендинга Sony Music Academy</h2>
                <p><span class="highlight">Sibdev</span> <span class="highlight">Портфолио</span> Sony Music Academy — сайт образовательного проекта.</p>
                <p class="description">Sony Music — вторая по величине в мире звукозаписывающая компания. Входит в «Большую тройку», контролирующую 70% мирового музыкального рынка. Академия — образовательный проект для привлечения талантов в штат компании.</p>
            </div>
            <div class="image-content">
                <img src="{{ asset('images/sony/sony_music_promo.png') }}" alt="Sony Music Image">
            </div>
        </section>

        <!-- Секция задачи -->
        <section class="task-section">
            <div class="container">
                <h2 class="task-title">Задача</h2>
                <p class="task-text">
                    Чтобы запустить Академию, российское отделение обратилось к нам за помощью. Мы взяли на себя задачу: в сжатые сроки создать и запустить лендинг для сбора заявок.
                </p>
                <p class="task-details">
                    Важно было обезопасить хранение данных, а также иметь возможность анализировать их.
                </p>
                <p class="task-details">
                    Опубликовать проект предстояло на корпоративном сервере Sony Music — с учетом всех регламентов корпорации.
                </p>
            </div>

            <!-- Секция решения и технологий -->
            <div class="solution-section container">
                <div class="solution-left">
                    <h2 class="section-title">Решение</h2>
                    <p class="solution-text">
                        Запустили лендинг через 3 недели. Для безопасности и аналитики данных — интегрировали сайт с HR-сервисом. Кроме того, доработали визуальную концепцию. Все работы успешно согласовали между четырьмя городами: Москва, Нью-Йорк, Красноярск, Токио.
                    </p>
                </div>
                <div class="solution-right">
                    <h2 class="section-title">Технологии</h2>
                    <ul class="technologies-list">
                        <li>Figma</li>
                        <li>Tilda</li>
                        <li>PHP</li>
                        <li>WordPress</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Секция дизайна -->
        <section class="design-section container">
            <div class="design-section container">
                <div class="image-container">
                    <img src="{{ asset('images/sony/sony_music_3.png') }}" alt="Sony Design" class="design-image">
                </div>
                <div class="text-content">
                    <h2 class="section-title">Дизайн</h2>
                    <p class="design-text">
                        Перед лендингом стояла имиджевая задача — передать креативность как ценность Академии.
                    </p>
                    <p class="design-text">
                        В основу концепции лег стиль Lo-Fi. Его ключевые слова — простота, расслабленность, отсутствие обработки (или же такое ощущение).
                    </p>
                    <p class="design-text">
                        Так, был доработан дизайн кассеты, а для фона выбрана текстура писчей бумаги с рваными краями.
                    </p>
                </div>
            </div>
            <!-- Секция с изображением на всю ширину и текстом под ним -->
            <div class="full-width-image">
                <img src="{{ asset('images/sony/sony-cassette_2.png') }}" alt="Dynamic Design" class="dynamic-image">
            </div>
            <div class="full-width-text container">
                <p class="full-width-text-content">
                    Также мы добавили динамики: анимировали элементы при скроллинге, местами использовали живой видеоряд для фона.
                </p>
            </div>
        </section>
        <!-- Новый блок с изображением WebP -->
        <section class="webp-section">
            <div class="container">
                <div class="image-container">
                    <picture>
                        <source srcset="{{ asset('images/sony/sony3.webp') }}" type="image/webp">
                        <img src="{{ asset('images/sony/sony3.webp') }}" alt="WebP Image" class="webp-image">
                    </picture>
                </div>
                <div class="text-content">
                    <h2 class="section-title">Новый блок с WebP изображением</h2>
                    <p class="section-text">Это изображение загружается в формате WebP для оптимизации скорости загрузки. Если браузер не поддерживает WebP, используется изображение в формате JPG.</p>
                </div>
            </div>
        </section>
        <!-- Секция с формой отправки -->
        <section class="contact-form-section">
            <div class="container">
                <div class="form-wrapper">
                    <form action="#" method="POST" class="contact-form">
                        <div class="form-group">
                            <label for="name">Имя</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Сообщение</label>
                            <textarea id="message" name="message" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="attach-files-button">Прикрепить файлы</button>
                            <button type="submit" class="submit-button">Отправить</button>
                        </div>
                    </form>
                    <p class="consent-text">
                        Нажимая «Отправить», вы даете свое согласие на обработку персональных данных и соглашаетесь с политикой обработки персональных данных.
                    </p>
                </div>
            </div>
        </section>
    </main>
@endsection
