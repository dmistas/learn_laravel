@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @if(session()->has('success'))
                <div class="alert alert-success">Новость успешно добавлена</div>
            @elseif(session()->has('fail'))
                <div class="alert alert-danger">Не удалось добвить новость</div>
            @endif
                <div>
                    <a class="btn btn-success" href="{{ route('news.create') }}">Добавить новость</a>
                </div>

            @forelse( $news as $n)
                <div class="post-preview">
                    <a href="{{route('news_slug', ['slug'=>$n->slug])}}">
                        <h2 class="post-title">
                            {{$n->title}}
                        </h2>
                    </a>
                    <p>
                        {{$n->description}}
                    </p>
                    <p class="post-meta">Опубликовал
                        <a href="#">{{$n->author}}</a>
                        {{$n->updated_at->format('d-m-Y (H:i)')}}
                    </p>
                    <a class="btn btn-success" href="{{ route('news.edit', ['news'=>$n->id]) }}">Редактировать</a>
                    <form action="{{ route('news.destroy', ['news'=>$n->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Удалить</button>
                    </form>
                </div>
                <hr>
            @empty
                <h3>Нет новостей</h3>
        @endforelse

        <!-- Pager -->
            <div class="clearfix">
                {{ $news->links() }}
            </div>
        </div>
    </div>
@stop

