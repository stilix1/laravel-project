@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile/profile.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="profile-container">
        <h1>Профиль пользователя</h1>

        <div class="user-info">
            <p><strong>Имя:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Роль:</strong> {{ $user->role }}</p>
            <p><strong>Дата создания:</strong> {{ $user->created_at->format('d.m.Y H:i:s') }}</p>
        </div>

        <a href="{{ route('profile.edit') }}" class="btn-edit">Редактировать профиль</a>
    </div>
@endsection
