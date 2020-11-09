<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Блог на Laravel | @yield('title-block')</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css" rel="stylesheet')}}" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/clean-blog.min.css')}}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<x-navigation2></x-navigation2>
@php $title = "Компонент"; @endphp
<!-- Hero Header -->
@if(Request::is('categories'))
<x-header :title=$title></x-header>
@endif
<!--Header for single news-->
@if(Request::is('news/*'))
    <x-header_news></x-header_news>
@endif
<!-- Main Content -->
<div class="container">
    @yield('content')

</div>

<hr>

<!-- Footer -->
<x-footer></x-footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('js/clean-blog.min.js') }}"></script>

</body>

</html>
