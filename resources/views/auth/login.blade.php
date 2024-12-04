@extends('layouts.app')

@section('fonts')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endsection

@section('content') {{-- Секция "content" для вставки основного содержимого страницы --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="login-container">
                    <h1>Login</h1>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" required>
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" required>
                        <button type="submit">Login</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

