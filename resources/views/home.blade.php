@extends('layouts.app')

@section('title')
    home
@endsection

@section('fonts')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection('fonts')

@section('main')
    <main class="main">
        <div class="promo-main">
            <table>
                <tbody>
                <tr>
                <tbody>
                <tr>
                    <td style="text-align: center">
                        <p style="margin: 25px; font-weight: bold; font-size: 18px;">Создание Промо-сайтов</p>
                        <p style="margin: 25px; text-align: justify; font-size: 15px"> Промо-сайты - лучший способ
                            привлечения внимания к товару, услуге или событию</p>
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <p><a
                                            href="https://expodat.ru/ru/parkzoo?utm_label=parkzoo"
                                            target="_blank"
                                            rel="noopener noreferrer">
                                            <img src={{ asset('images/img1.png') }} alt="" width="290"/>
                                        </a></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <p style="margin: 20px 20px 0; font-weight: bold; font-size: 17px;">Попробуйте прямо
                                        сейчас</p>
                                    <p style="margin: 15px 20px 30px;"><a
                                            style="display: inline-block; padding: 15px 30px; border: 2px solid; border-radius: 15px; background-color: #fdcc00; color:black; text-decoration: none; font-size: 15px; font-weight: bold;"
                                            href="/promo" target="_blank" rel="noopener noreferrer">СОЗДАТЬ САЙТ</a></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="promo-features">
            <table>
                <tr style="text-align: center">
                    <td>
                        <h2>Возможности для промо-сайтов</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="https://www.centum-d.com/wp-content/uploads/2021/01/promo-1024x352.jpg"
                             style="display:block" width="575" alt="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Привлекательный и современный дизайн</li>
                            <li>Адаптивность под разные устройства</li>
                            <li>Интеграция социальных медиа</li>
                            <li>Формы обратной связи</li>
                            <li>Оптимизация для поисковых систем</li>
                            <li>Быстрая загрузка страниц</li>
                            <li>Интеграция аналитики и отслеживание посетителей</li>
                            <li>Многоязычность и локализация</li>
                            <li>Интеграция с CMS (системами управления контентом)</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
        <div class="home-writer">
            <table>
                <tr>
                    <td>
                        <p>
                        <h3> Откройте свой сайт для рекламного промо</h3> </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                            Используйте всевозможные дизайны для вашего нового сайта
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="text-align: center">
                            <button>Попробовать бесплатно</button>
                    </td>
                </tr>
            </table>
        </div>
    </main>
@endsection
