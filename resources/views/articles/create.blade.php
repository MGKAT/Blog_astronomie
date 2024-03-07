<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Article</title>
</head>
<body>
    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
        @error('name')
        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
        @enderror
        <br />
        <label for="price">Price:</label>
        <input type="number" class="form-control" id="price" name="price">
        @error('price')
        <div class="invalid-feedback">{{ $errors->first('price') }}</div>
        @enderror
        <br />
        <label for="mark">Mark:</label>
        <input type="text" class="form-control" id="mark" name="mark">
        @error('mark')
        <div class="invalid-feedback">{{ $errors->first('mark') }}</div>
        @enderror
        <br />
        <label for="description" class="form-label">Description:</label>
        <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"></textarea>
        <br />
        <label for="serial_number">Serial Number:</label>
        <input type="text" class="form-control" id="serial_number" name="serial_number">
        @error('serial_number')
        <div class="invalid-feedback">{{ $errors->first('serial_number') }}</div>
        @enderror
        <br />
        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id" class="form-control">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br />
        <label for="image">Image:</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
        @error('image')
        <div class="invalid-feedback">{{ $errors->first('image') }}</div>
        @enderror
        <br />
        <button type="submit" class="btn btn-primary">Create Article</button>
    </form>
</body>
</html>
