@extends('layouts.app')

@section('title', $serviceTitle ?? 'Услуги')

@section('styles')
    <link href="{{ asset('css/service/service.css') }}" rel="stylesheet">
@endsection


@section('content')
    <div class="service-page">
        <h1 class="service-title">{{ $serviceTitle ?? 'Наши услуги' }}</h1>

        <div class="service-description">
            <p>{{ $serviceDescription ?? 'Мы предлагаем широкий спектр услуг, включающих разработку веб-приложений, создание сайтов, дизайн, и многое другое.' }}</p>
        </div>

        <h2>Информация об услуге</h2>
        <ul class="service-details">
            <li><strong>Стоимость:</strong> {{ $servicePrice ?? 'По запросу' }}</li>
            <li><strong>Срок выполнения:</strong> {{ $serviceTime ?? 'По договоренности' }}</li>
            <li><strong>Контактный телефон:</strong> {{ $contactPhone ?? '+7 (495) 123-45-67' }}</li>
        </ul>

        <h2>Форма для связи</h2>
        <form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <label for="name">Ваше имя:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Ваш email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Ваше сообщение:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit" class="contact-button">Отправить сообщение</button>
        </form>
    </div>
@endsection
