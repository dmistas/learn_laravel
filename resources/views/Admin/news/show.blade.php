@extends('Layouts.main')

@section('title-block')
    Новость {{ $news->title }}
@endsection
@section('content')

<div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    @if(session()->has('success'))
                        <div style="color: green"><strong>{{ session()->get('success') }}</strong>dsdjl</div>
                    @endif
                    <h3>{{ $news->title }}</h3>
                    @if($news->image)
                        <img src="{{$news->image}}" alt="{{$news->image}}">
                    @endif
                    <p>{{$news->description}}</p>
                </div>
            </div>
        </div>
</div>
@endsection
