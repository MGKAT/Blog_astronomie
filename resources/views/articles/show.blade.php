<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show article</title>
</head>
<body>
    <h1 style="justify-content: center ; justify-items: center">Show article</h1>
    <hr>
    <div class="card-body">
        <h5 class="card-title mt-3"> {{ $article->name }}</h5>
        <img src="{{ asset('images/' . $article->image) }}" alt="{{ $article->image }}" style="max-width: 100%; height: auto">
        <p>{{ $article->price }}</p>
        <p>{{ $article->mark }}</p>
        <p>{{ $article->description }}</p>
        <p>{{ $article->serial_number }}</p>
        <p>{{ $article->user->name }}</p>
        <p>{{ $article->category->name }}</p>
        <div class="d-flex justify-content-between align-items-center">
            @if($article->created_at)
                <small>Posted on {{ $article->created_at->format('d/m/Y at H:i') }}</small>
            @endif
        </div>
    </div>

</body>
</html>
