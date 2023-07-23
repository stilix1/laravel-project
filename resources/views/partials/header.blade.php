<header class="header">
    <div class="container">
        <div class="header-content">
            <a href="/" class="header-logo">
                <img style="border-radius: 50px" src="{{ asset('images/logo.png') }}" alt="Логотип" class="logo-image"
                     width=25>
            </a>
            <img src="https://i.gifer.com/Paw.gif" width="65px">
            <nav class="header-nav">
                <ul class="header-nav-list">
                    <li class="header-nav-item"><a href="/contact">Контакты</a></li>
                    <li class="header-nav-item"><a href="/promo_pages"> Создать сайт</a></li>
                    <li class="header-nav-item"><a href="/feedback"> Связаться с нами </a></li>
                    @csrf
                    @if(Auth::check())
                        <li class="header-nav-item"><a href="/me">Добро пожаловать, {{ Auth::user()->name }}</a></li>
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
</header>
