@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <a href="/admin/news">Редакатирование новостей</a><br>
            <a href="{{ route('admin_all_users') }}">Редакатирование пользователей</a>

        </div>
    </div>
@stop

