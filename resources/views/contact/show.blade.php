<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Contact</title>
</head>
<body>
    <h1>List of Contact</h1>
    <hr>
    <div class="card-body">
        <h5 class="card-title"> {{ $contact->name }}</h5>
        <p>{{ $contact->email }}</p>
        <p>{{ $contact->subject }}</p>
        <p>{{ $contact->message }}</p>
        <div class="d-flex justify-content-between align-items-center">
            @if($contact->created_at)
                <small>Posted on {{ $contact->created_at->format('d/m/Y at H:i') }}</small>
            @endif
        </div>
    </div>
{{--    <a href="{{ route('contacts.show', ['']) }}" class="btn btn-primary">Show</a>--}}
</body>
</html>
