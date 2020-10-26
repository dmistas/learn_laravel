<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
</head>
<body>

<h3>{{ $news['title'] }}</h3>
<p>{{$news['description']}}</p>
<ul>
    <li><a href="{{route('news')}}">Категории</a></li>
    <li><a href="{{route('category_id', ['id'=>$news['category_id']])}}">Новости в категории</a></li>
</ul>

</body>
</html>
