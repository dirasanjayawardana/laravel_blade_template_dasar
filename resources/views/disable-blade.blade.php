<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disable Blade</title>
</head>

<body>
    {{-- jika ingin disable blade template untuk pemanggilan variabel, bisa gunakan @, maka {{$variabel}} akan dirender sebagai tulisan biasa --}}
    <h1>Hello @{{ $name }}</h1>

    {{-- jika banyak baris yang inign di disable blade template nya, bisa gunakan @verbatim dan @endverbatim --}}
    @verbatim
        <p>
            Hello {{ $name }}
        </p>
    @endverbatim
</body>

</html>
