<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foreach</title>
</head>

<body>
    {{-- Foreach --> melakukan looping data array --}}
    <ul>
        @foreach ($hobbies as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>

</html>
