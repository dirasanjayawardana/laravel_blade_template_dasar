<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Env</title>
</head>

<body>
    {{-- @env(nama) atau @env([nama1, nama2]) --> untuk mengecek apakah sedang menggunakan env yg disebutkan atau tidak --}}
    @env('testing')
    This is testing environment
    @endenv
</body>

</html>
