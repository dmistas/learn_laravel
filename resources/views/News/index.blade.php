@extends('Layouts.main')


@section('content')

    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
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
                        {{$n->created_at}}
                    </p>

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
@endsection
