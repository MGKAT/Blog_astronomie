<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a category</title>
</head>
<body>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="name">Name of category :</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Example of name 'Hero comics'">
        @error('name')
        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
        @enderror
        <br />
        <label for="description" class="form-label">Description of category :</label>
        <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"></textarea>
        <br />
        <button type="submit" class="btn btn-primary">create my category</button>
    </form>
</body>
</html>
