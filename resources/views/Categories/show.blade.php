@extends('Layouts.main')
@section('title-block')
    Новости категории
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @forelse( $newsFromCategory as $n)
                <div class="post-preview">
                    <a href="{{route('news_id', ['id'=>$n['id']])}}">
                        <h2 class="post-title">
                            {{$n['title']}}
                        </h2>
                        <h3 class="post-subtitle">
                            {{$n['title']}}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        {{ \Carbon\Carbon::now() }}</p>
                </div>
                <hr>
            @empty
                <h3>Новостей нет</h3>
        @endforelse

        <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>

@endsection
