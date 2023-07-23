@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Редактирование промо-страницы</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('promo_pages.update', $promoPage->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Заголовок</label>
                                <input type="text" name="title" id="title" class="form-control"
                                       value="{{ $promoPage->title }}" required>
                            </div>

                            <div class="form-group">
                                <label for="content">Контент</label>
                                <textarea name="content" id="content" class="form-control" rows="10"
                                          required>{{ $promoPage->content }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </form>
                        <!-- Кнопка для удаления промо-страницы -->
                        <form method="POST"
                              action="{{ route('promo_pages.destroy', ['promo_page' => $promoPage->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    onclick="return confirm('Вы уверены, что хотите удалить эту промо-страницу?')">
                                Удалить
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
