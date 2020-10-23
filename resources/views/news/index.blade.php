<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if(isset($categories))
    @foreach($categories as $c)
        <a href="{{route('category_id', ['id'=>$c['category_id']])}}"><h4>{{$c['title']}}</h4></a>

    @endforeach
@endif


{{--@forelse ($users as $user)--}}
{{--    <li>{{ $user->name }}</li>--}}
{{--@empty--}}
{{--    <p>No users</p>--}}
{{--@endforelse--}}


</body>
</html>
