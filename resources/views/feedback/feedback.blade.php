@extends('layouts.app')
@section('title')
    Форма обратной связи
@endsection
@section('main')

    <h1>Форма обратной связи</h1>

    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif
    <form method="POST" action="{{ route('feedback.submit') }}">
        @csrf
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Сообщение:</label>
        <textarea id="message" name="message" required></textarea><br><br>

        <button type="submit">Отправить</button>
    </form>
@endsection
