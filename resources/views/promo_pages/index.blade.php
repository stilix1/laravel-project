@extends('layouts.app')
@section('title')
    Создать промо-страницу
@endsection

@section('fonts')
    <link href="{{ asset('css/promo/index.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main class="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-head">
                            <h1>Список промо-страниц</h1>
                            <ul>
                                @foreach ($promoPages as $promoPage)
                                    <li>
                                        <a href="{{ route('promo_pages.show', $promoPage->id) }}">
                                            {{ $promoPage->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('promo_pages.create') }}" class="btn btn-primary">Создать новую
                                страницу</a>
                            <br><br>
                            @if (count($promoPages) > 0)
                                <ul class="list-group">
                                    @foreach ($promoPages as $promoPage)
                                        <li class="list-group-item">
                                            <a href="{{ route('promo_pages.edit', $promoPage->id) }}">{{ $promoPage->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>У вас пока нет созданных промо-страниц.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
