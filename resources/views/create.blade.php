<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="p-3 mb-2 bg-secondary bg-gradient text-white">
    <div class="container">
        <h1 class="text-center">Insert Data</h1>
        <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh">
            <form class="col-lg-5" action="{{route('book.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input class="form-control" name="title" type="text" placeholder="Title">
                    @error('title') <span>{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Author</label>
                    <input class="form-control" name="author" type="text" placeholder="Author">
                    @error('author') <span>{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Genre</label>
                    <input class="form-control" name="genre" type="text" placeholder="Genre">
                    @error('genre') <span>{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Release Date</label>
                    <input class="form-control" name="releasedate" type="date" placeholder="Release Date">
                    @error('releasedate') <span>{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Price</label>
                    <input class="form-control" name="price" type="number" placeholder="Price">
                    @error('price') <span>{{$message}}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>