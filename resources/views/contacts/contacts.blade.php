@extends('layouts.app')

@section('title', 'Контакты')

@section('styles')
    <link href="{{ asset('css/contacts/contacts.css') }}" rel="stylesheet">
@endsection

@section('main')
    <main class="main contacts-page">
        <div class="contacts-header">
            <h2>Контакты</h2>
            <p>Мы всегда рады вашим вопросам и предложениям. Свяжитесь с нами!</p>
        </div>

        <div class="contacts-info">
            <div class="contact-item">
                <h3>Название компании</h3>
                <p>ООО "Веб-Студия Глобал"</p>
            </div>
            <div class="contact-item">
                <h3>Генеральный директор</h3>
                <p>Алексей Иванов</p>
            </div>
            <div class="contact-item">
                <h3>Телефоны</h3>
                <p>+7 (495) 123-45-67</p>
                <p>+7 (800) 555-35-35</p>
            </div>
            <div class="contact-item">
                <h3>Электронная почта</h3>
                <p><a href="mailto:info@globalstudio.ru">info@globalstudio.ru</a></p>
            </div>
            <div class="contact-item">
                <h3>Адрес</h3>
                <p>г. Москва, ул. Пушкина, д. 10, офис 5</p>
            </div>
        </div>
    </main>
@endsection
