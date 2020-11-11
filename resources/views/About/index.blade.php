@extends('Layouts.main')

@section('title-block')
    О нас
@endsection
@section('content')

    <h3>Это агрегатор новостей </h3>
    <p>Мы студенты geekbrains, изучаем Laravel. Хотим работать backend разработчиками!</p>

    <div class="col-8 offset-2">

        @if(request()->get('fio'))
            <h4>Ваше имя</h4>
            <h3 style="color: green">{{ request()->get('fio') }}</h3>
            <h4>Ваш отзыв:</h4>
            <p>{{ request()->get('description') }}</p>
        @endif
        <h3>Оставить отзыв</h3>

        <form action="" method="get">
            @csrf
            <p>Ваше имя<br><input class="form-control" type="text" name="fio" value="{{ old('fio') }}"></p>

            <p>Текст отзыва:<br><textarea class="form-control" name="description"
                                          rows="5">{!! old('description') !!}</textarea></p>
            <button class="btn btn-success" type="submit">Отправить</button>
        </form>
    </div>

@endsection
