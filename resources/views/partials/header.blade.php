<header class="header">
    <div class="header__fixed lock-padding compensate-for-scrollbar _paddingRight">
        <div class="header__container container">
            <div class="header__wrapper">
                <!-- Меню -->
                <div class="header__item-menu main-menu">
                    <nav class="main-menu__body">
                        <ul class="main-menu__list">
                            <!-- Услуги -->
                            <!-- Логотип -->
                            <a href="{{ url('/') }}" class="header__logo">
                                <img alt="Итерация" class="logo_desk" src="{{ asset('images/logo.png') }}">
                            </a>
                            <li class="main-menu__item">
                                <a href="{{ url('/services') }}" class="main-menu__link">Услуги</a>
                                <span class="main-menu__arrow _with-sub"></span>
                                <div class="main-menu__sub-list sub-menu">
                                    <!-- Структура подменю: выравнивание с помощью Flexbox -->
                                    <div class="sub-menu__content">
                                        <!-- Левая часть (20%) -->
                                        <div class="sub-menu__left">
                                            <a href="{{ url('/services/development') }}">Разработка</a>
                                            <a href="{{ url('/services/design') }}">Дизайн</a>
                                        </div>

                                        <!-- Правая часть (80%) -->
                                        <div class="sub-menu__right">
                                            <!-- Первая подгруппа: Сервисы -->
                                            <div class="sub-menu__category">
                                                <h3>Сервисы</h3>
                                                <a href="{{ url('/services/startup') }}">Стартапы</a>
                                                <a href="{{ url('/services/mvp') }}">MVP</a>
                                                <a href="{{ url('/services/cloud_services') }}">Облачные сервисы</a>
                                                <a href="{{ url('/services/personal_cabinets') }}">Личные кабинеты</a>
                                                <a href="{{ url('/services/aggregators') }}">Агрегаторы</a>
                                                <a href="{{ url('/services/messengers') }}">Мессенджеры</a>
                                                <a href="{{ url('/services/edtech') }}">EdTech</a>
                                                <a href="{{ url('/services/hr_tech') }}">HR-Tech</a>
                                                <a href="{{ url('/services/fintech') }}">FinTech</a>
                                                <a href="{{ url('/services/foodtech') }}">FoodTech</a>
                                            </div>

                                            <!-- Вторая подгруппа: Веб-приложения -->
                                            <div class="sub-menu__category">
                                                <h3>Веб-приложения</h3>
                                                <a href="{{ url('/services/spa') }}">Single-Page App (SPA)</a>
                                                <a href="{{ url('/services/pwa') }}">Progressive Web App (PWA)</a>
                                                <a href="{{ url('/services/twa') }}">Telegram Web App (TWA)</a>
                                            </div>

                                            <!-- Третья подгруппа: Мобильные приложения -->
                                            <div class="sub-menu__category">
                                                <h3>Мобильные приложения</h3>
                                                <a href="{{ url('/services/android') }}">Android</a>
                                                <a href="{{ url('/services/ios') }}">iOS</a>
                                                <a href="{{ url('/services/cross_platform') }}">Кроссплатформенные</a>
                                            </div>

                                            <!-- Четвертая подгруппа: Веб-сайты -->
                                            <div class="sub-menu__category">
                                                <h3>Веб-сайты</h3>
                                                <a href="{{ url('/services/landing_page') }}">Лендинги</a>
                                                <a href="{{ url('/services/corporate_site') }}">Корпоративные сайты</a>
                                                <a href="{{ url('/services/business_card_site') }}">Сайты-визитки</a>
                                                <a href="{{ url('/services/catalog_site') }}">Сайты-каталоги</a>
                                                <a href="{{ url('/services/promo_site') }}">Промо-сайты</a>
                                                <a href="{{ url('/services/info_portal') }}">Информационные порталы</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Прочие пункты меню -->
                            <li><a href="{{ url('/portfolio') }}" class="main-menu__link">Портфолио</a></li>
                            <li><a href="{{ url('/about') }}" class="main-menu__link">Студия</a></li>
                            <li><a href="{{ url('/contacts') }}" class="main-menu__link">Контакты</a></li>
                            @csrf
                            @if(Auth::check())
                                <li class="header-nav-item"><a href="/profile">Добро
                                        пожаловать, {{ Auth::user()->name }}</a></li>
                                <li class="header-nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit">Выйти</button>
                                    </form>

                                </li>
                            @else
                                <li class="header-nav-item"><a href="{{ route('login') }}">Войти</a></li>
                                <li class="header-nav-item"><a href="{{ route('register') }}">Регистрация</a></li>
                            @endif

                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</header>
