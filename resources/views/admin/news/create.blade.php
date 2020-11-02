@extends('layouts.app')
@section('content')
    <div class="col-8 offset-2">
        <h3>Создание новости</h3>
    <form action="{{ route('news.store') }}" method="post">
        @csrf
        <p>Заголовок<br><input class="form-control" type="text" name="title" value="{{ old('title') }}"></p>
        <p>Автор<br><input class="form-control" type="text" name="author" value="{{ old('author') }}"></p>
        <p>Описание:<br><textarea class="form-control" name="description" rows="5">{!! old('description') !!}</textarea> </p>
        <button class="btn btn-success" type="submit">Отправить</button>
    </form>
    </div>
@endsection
