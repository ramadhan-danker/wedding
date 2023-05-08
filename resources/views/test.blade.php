<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>{{ $d->title }}</h1>
    @foreach ($d->images as $filename)
        <img src="{{ asset('storage/' . $filename) }}" class="card-img-top" alt="{{ $d->title }}">
    @endforeach


</body>

</html>
