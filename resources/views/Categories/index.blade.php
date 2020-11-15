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
                        <h4 class="post-title">
                            {{$c->title}}
                        </h4>
                    </a>
                    <div><img src="{{ $c->image }}" alt="{{ $c->image }}"></div>

                </div>
                <hr>
            @empty
                <h3>Нет категорий</h3>
        @endforelse

        <!-- Pager -->
            <div class="clearfix">
                {{ $categories->links() }}
            </div>
        </div>
    </div>

@endsection
