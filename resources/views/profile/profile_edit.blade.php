@extends('layouts.app')

@section('styles')
    <link href="{{ asset('home.css') }}" rel="stylesheet">
    <link href="{{ asset('profile/profile.css') }}" rel="stylesheet">
@endsection


@section('content')
    <div class="profile-edit-container">
        <h1>Редактировать профиль</h1>

        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PUT')

            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>

            <label for="role">Роль:</label>
            <input type="text" name="role" id="role" value="{{ old('role', $user->role) }}" readonly>

            <label for="password">Новый пароль (если нужно):</label>
            <input type="password" name="password" id="password">

            <label for="date_of_birth">Дата рождения:</label>
            <input type="date" name="date_of_birth" id="date_of_birth"
                   value="{{ old('date_of_birth', $user->date_of_birth) }}">

            <button type="submit" class="btn-save">Сохранить изменения</button>
        </form>
    </div>
@endsection
