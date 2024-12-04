@extends('layouts.app')

@section('title', 'Студия')

@section('styles')
    <link href="{{ asset('css/about/about.css') }}" rel="stylesheet">
@endsection

@section('main')
    <div class="studio-page">
        <h1 class="studio-title">О нашей студии</h1>

        <div class="studio-info">
            <h2>Расположение офиса</h2>
            <p>г. Москва, ул. Пушкина, д. 10, офис 5</p>

            <h2>Информация о компании</h2>
            <ul>
                <li><strong>Генеральный директор:</strong> Алексей Иванов</li>
                <li><strong>Общее количество сотрудников:</strong> 50</li>
                <li><strong>Программистов:</strong> 30</li>
                <li><strong>Дизайнеров:</strong> 15</li>
                <li><strong>Прочий персонал:</strong> 5</li>
            </ul>

            <h2>Команда дизайнеров</h2>
            <ul>
                <li>Анна Сидорова – Ведущий дизайнер</li>
                <li>Ольга Петрова – Дизайнер UI/UX</li>
                <li>Дмитрий Смирнов – Графический дизайнер</li>
            </ul>

            <h2>Команда программистов</h2>
            <ul>
                <li>Иван Кузнецов – Ведущий программист</li>
                <li>Сергей Ильин – Full Stack разработчик</li>
                <li>Михаил Тихонов – Frontend разработчик</li>
                <li>Мария Васильева – Backend разработчик</li>
            </ul>

            <h2>Часы работы</h2>
            <table class="schedule-table">
                <tr>
                    <th>День недели</th>
                    <th>Время работы</th>
                </tr>
                <tr><td>Понедельник</td><td>09:00 - 18:00</td></tr>
                <tr><td>Вторник</td><td>09:00 - 18:00</td></tr>
                <tr><td>Среда</td><td>09:00 - 18:00</td></tr>
                <tr><td>Четверг</td><td>09:00 - 18:00</td></tr>
                <tr><td>Пятница</td><td>09:00 - 18:00</td></tr>
                <tr><td>Суббота</td><td>Выходной</td></tr>
                <tr><td>Воскресенье</td><td>Выходной</td></tr>
            </table>
        </div>
    </div>
@endsection
