<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="p-3 mb-2 bg-secondary bg-gradient text-white">
    <table class="table table-dark table-hover">
        <thead>
            <td>Publisher Name</td>
            <td>Book Title</td>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach($publishers as $publisher)
            <tr>
                <td>{{$publisher->publisher}}</td>
                <td>{{$publisher->book->title}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('index')}}" class="btn btn-primary mt-5"
            style="display: block; margin:auto; width:50%">
        Go To Book
    </a>
</body>
</html>