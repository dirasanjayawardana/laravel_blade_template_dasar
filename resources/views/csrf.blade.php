<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSRF</title>
</head>

<body>
    {{-- untuk menambahkan CSRF token manual --}}
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

    {{-- @csrf --> directive untuk menambahkan CSRF Token --}}
    <form action="/test" method="POST">
        @csrf
        <input type="text", name="name">
        <input type="submit", name="submit">
    </form>
</body>

</html>
