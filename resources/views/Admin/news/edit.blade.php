@extends('Layouts.app')


@section('content')
    <div class="col-8 offset-2">
        @if(session()->has('fail'))
            <div class="alert alert-danger">Не удалось сохранить новость</div>
        @endif


        <h3>Редактировать новость с #ID = {{ $news->id }}</h3>
        <br>
        <form method="post" action="{{ route('news.update', ['news' => $news]) }}">
            @method('PUT')
            @csrf
{{--            <p>Заголовок: <br><input class="form-control" name="title" value="{{ $news->title }}" ></p>--}}
{{--            <p>Автор: <br><input class="form-control" name="author" value="{{ $news->author }}" ></p>--}}
{{--            <p>Описание: <br><textarea class="form-control" name="description">{!! $news->description !!}</textarea></p>--}}






            <p>Заголовок<br><input class="form-control" type="text" name="title" value="{{ $news->title }}">
            @error('title')
            <div class="alert alert-danger">
                @foreach($errors->get('title') as $error)
                    {{ $error }}
                @endforeach
            </div>
            @enderror</p>

            <p>Автор<br><input class="form-control" type="text" name="author" value="{{ $news->author }}">
            @error('author')
            <div class="alert alert-danger">
                @foreach($errors->get('author') as $error)
                    {{ $error }}
                @endforeach
            </div>
            @enderror
            </p>
            <p>Описание:<br>
                <textarea class="form-control" name="description" rows="5">{!! $news->description !!}</textarea>
            </p>

            <label for="category">Категория</label>
            <select class="custom-select d-block w-100" name="category_id">

                <option value="">Выберите категорию...</option>
                @foreach($categories as $category)
                    <option value="{{ $category -> id }}">{{ $category -> title }}</option>
                @endforeach

            </select>
            @error('category_id')
            <div class="alert alert-danger">
                Пожалуйста выберите категорию.
            </div>
            @enderror
            <button class="btn btn-success" type="submit">Сохранить</button>
        </form>
    </div>

@endsection
