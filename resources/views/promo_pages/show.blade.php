@extends('layouts.app')
@section('title')
    {{ $promoPage->title }}
@endsection
@section('fonts')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        {!! $promoPage->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
