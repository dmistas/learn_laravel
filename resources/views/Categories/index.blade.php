@extends('Layouts.main')
@section('title-block')
    Категории новостей
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @forelse( $categories as $c)
                <div class="post-preview">
                    <a href="{{route('category_id', ['id'=>$c->id])}}">
                        <h2 class="post-title">
                            {{$c->title}}
                        </h2>
                    </a>

                </div>
                <hr>
            @empty
                <h3>Нет категорий</h3>
        @endforelse

        <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>

@endsection
