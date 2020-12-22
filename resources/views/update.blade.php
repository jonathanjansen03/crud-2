<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="p-3 mb-2 bg-secondary bg-gradient text-white">
    <div class="container">
        <h1 class="text-center">Update Data</h1>
        <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh">
            <form class="col-lg-5" action="{{route('book.update', $book->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input class="form-control" name="title" type="text" placeholder="Title" value="{{$book->title}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Author</label>
                    <input class="form-control" name="author" type="text" placeholder="Author" value="{{$book->author}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Genre</label>
                    <input class="form-control" name="genre" type="text" placeholder="Genre" value="{{$book->genre}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Release Date</label>
                    <input class="form-control" name="releasedate" type="date" placeholder="Release Date" value="{{$book->release_date}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Price</label>
                    <input class="form-control" name="price" type="number" value="{{$book->price}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>