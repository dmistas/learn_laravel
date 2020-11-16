@extends('Layouts.app')
@section('content')


    <div class="col-8 offset-2">
        @if(session()->has('success'))
            <div class="alert alert-success">Новость успешно добавлена</div>
        @elseif(session()->has('fail'))
            <div class="alert alert-danger">Не удалось добвить новость</div>
        @endif
        <h3>Создание новости</h3>
        <form action="{{ route('news.store') }}" method="post">
            @csrf
            <p>Заголовок<br><input class="form-control" type="text" name="title" value="{{ old('title') }}">
            @error('title')
            <div class="alert alert-danger">
                @foreach($errors->get('title') as $error)
                    {{ $error }}
                @endforeach
            </div>
            @enderror</p>

            <p>Автор<br><input class="form-control" type="text" name="author" value="{{ old('author') }}">
            @error('author')
            <div class="alert alert-danger">
                @foreach($errors->get('author') as $error)
                    {{ $error }}
                @endforeach
            </div>
            @enderror
            </p>
            <p>Описание:<br>
                <textarea class="form-control" name="description" rows="5">{!! old('description') !!}</textarea>
            </p>

            <label for="category">Категория</label>
            <select class="custom-select d-block w-100" name="category_id">
                <option value="">Выбрать категорию...</option>
                @foreach($categories as $category)
                    <option value="{{ $category -> id }}">{{ $category -> title }}</option>

                @endforeach

            </select>
            @error('category_id')
                <div class="alert alert-danger">
                    Пожалуйста выберите категорию.
                </div>
            @enderror


            <button class="btn btn-success" type="submit">Отправить</button>
        </form>
    </div>
@endsection
