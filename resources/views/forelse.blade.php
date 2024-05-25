<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>forelse</title>
</head>

<body>
    {{-- @forelse --> mirip seperti foreach, namun ketika melakukan perulangan dan datanya tidak ada, maka @empty pada forelse akan menampilkan seuatu --}}
    @forelse ($hobbies as $item)
        <li>{{ $item }}</li>
    @empty
        <li>Tidak ada hobi</li>
    @endforelse
</body>

</html>
