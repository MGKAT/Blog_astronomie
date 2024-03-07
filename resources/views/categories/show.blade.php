<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show a Category</title>
</head>
<body>
    <h1 style="justify-content: center ; justify-items: center">Show a Category</h1>
    <hr>

    <div class="card-body">
        <h5 class="card-title mt-3"> {{ $category->name }}</h5>
        <p>{{ $category->description }}</p>
        <div class="d-flex justify-content-between align-items-center">
            @if($category->created_at)
                <small>Posted on {{ $category->created_at->format('d/m/Y at H:i') }}</small>
            @endif
        </div>
    </div>
    <a href="{{ route('categories.show', ['']) }}" class="btn btn-primary">Show</a>


</body>
</html>
