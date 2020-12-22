<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="p-3 mb-2 bg-secondary bg-gradient text-white">
    <table class="table table-dark table-hover">
        <thead>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Release Date</th>
            <th>Price</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>
                    <a href="{{route('book.show', $book->id)}}">{{$book->title}}</a>
                </td>
                <td>{{$book->author}}</td>
                <td>{{$book->genre}}</td>
                <td>{{$book->release_date}}</td>
                <td>{{$book->price}}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{route('book.edit', $book->id)}}" class="btn btn-success"}}>Edit</a>
                        <form action="{{route('book.delete', $book->id)}}" class="ml-3" method="POST">
                            <button type="submit" class="btn btn-danger">
                                @csrf
                                @method('DELETE')
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('book.create')}}" class="btn btn-primary mt-5"
            style="display: block; margin:auto; width:50%">
        Insert New Book
    </a>
</body>
</html>