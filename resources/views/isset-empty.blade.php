<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Is Set - Is Empty</title>
</head>

<body>
    {{-- @isset --> mengecek apakah sebuah variabel ada dan tidak null --}}
    {{-- @empty --> mengecek apakah sebuah variabel merupakan array kosong --}}
    <p>
        @isset($name)
            Hello my name is {{ $name }}
        @endisset
    </p>

    <p>
        @empty($hobbies)
            I don't have hobbies
        @endempty
    </p>
</body>

</html>
