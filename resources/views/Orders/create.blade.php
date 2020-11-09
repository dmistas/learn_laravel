@extends('Layouts.main')

@section('title-block')
    Запрос
@endsection
@section('content')


    <div class="col-8 offset-2">
        <h3>Создание запроса на заказ</h3>

        <form action="{{ route('orders.store') }}" method="post">
            @csrf
            <p>Ваше имя<br><input class="form-control" type="text" name="fio" value="{{ old('fio') }}"></p>
            <p>Ваш телефон<br><input class="form-control" type="tel" name="phone" value="{{ old('phone') }}"></p>
            <p>Ваш e-mail<br><input class="form-control" type="email" name="email" value="{{ old('email') }}"></p>
            <p>Введите задание:<br><textarea class="form-control" name="description"
                                      rows="5">{!! old('description') !!}</textarea></p>
            <button class="btn btn-success" type="submit">Отправить</button>
        </form>
    </div>
@endsection
