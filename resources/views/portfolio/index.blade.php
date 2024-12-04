@extends('layouts.app')

@section('title', 'Портфолио')

@section('styles')
    <link href="{{ asset('css/portfolio/portfolio.css') }}" rel="stylesheet">
@endsection

@section('main')
    <!-- Заголовок страницы -->
    <div class="section portfolio-header">
        <h2>Наши проекты</h2>
        <p>Изучите наши лучшие работы и кейсы</p>
    </div>
    <!-- TODO пофиксить сортировку -->
        <!-- Фильтр категорий -->
    <div class="section category-filter">
        <button data-category="Все категории" class="filter-button active">Все категории</button>
        <button data-category="Финтех" class="filter-button">Финтех</button>
        <button data-category="Медицина" class="filter-button">Медицина</button>
        <button data-category="Образование" class="filter-button">Образование</button>
        <button data-category="Фудтех" class="filter-button">Фудтех</button>
        <button data-category="E-commerce" class="filter-button">E-commerce</button>
        <button data-category="Государство" class="filter-button">Государство</button>
        <button data-category="Энтерпрайз" class="filter-button">Энтерпрайз</button>
        <button data-category="ИАС" class="filter-button">ИАС</button>
        <button data-category="CRM" class="filter-button">CRM</button>
        <button data-category="Торговые площадки" class="filter-button">Торговые площадки</button>
        <button data-category="Сайты" class="filter-button">Сайты</button>
    </div>

    <!-- Сетка проектов -->
    <div class="section project-grid">
        @foreach ($projects as $project)
            <div class="project-card">
                <a href="{{ route('project.show', ['slug' => $project->slug]) }}">
                    <img src="{{ asset($project->logo) }}" alt="{{ $project->title }}" class="project-image">
                </a>
                <div class="project-info">
                    <h3>{{ $project->title }}</h3>
                    <p>{{ $project->description }}</p>
                    <span class="project-date">{{ $project->created_at->format('F j, Y') }}</span>
                    <p class="project-author">Автор: {{ $project->author }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Кнопка "Смотреть больше" -->
    <div class="section view-more">
        <a href="#" class="btn btn-primary">Смотреть больше</a>
    </div>
@endsection
