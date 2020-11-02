@extends('layouts.main')

@section('title-block')
    Новость {{ $news['title'] }}
@endsection
@section('content')

<div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <h3>{{ $news['title'] }}</h3>
                    <p>{{$news['description']}}</p>
                </div>
            </div>
        </div>
</div>
@endsection
