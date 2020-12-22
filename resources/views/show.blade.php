<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Book</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="p-3 mb-2 bg-secondary bg-gradient text-white">
    <h1 class="text-center">{{$book->title}}</h1>
    <h5 class="text-center">Author: {{$book->author}}</h5>
    <h5 class="text-center">Genre: {{$book->genre}}</h5>
    <h5 class="text-center">Release Date: {{$book->release_date}}</h5>
    <h5 class="text-center">Price: Rp. {{$book->price}}</h5>
    <h5 class="text-center">
        Publishers:
        <ul style="list-style-position: inside">
            @foreach ($book->publishers as $publisher)
                <li>{{$publisher->publisher}}</li>
            @endforeach
        </ul>   
    </h5>
</body>
</html>