<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Encoding</title>
</head>

<body>
    {{-- secara default unutk menampilkan data menggunakan {{$variabel}}, otomatis akan memanggil function htmlspecialchars(data) untuk memastikan data aman dari input berupa tag HTML atau java script, yg bisa menyebabkan XSS (Cross Site Scripting) --}}

    {{-- jika menggunakan {{$variabel}}, ketika input berupa tag atau script, maka input tersebut tetap akan dirender sebagai string di html, dan tidak menjalankan script tersebut --}}

    {{-- jika ingin menampilkan tanpa escape bisa menggunakan {!!$variabel!!}, namun hati-hati karena bisa terkena XSS, jika input berupa tag atau script, maka script tersebut akan dijalankan --}}
    {!! $name !!}
</body>

</html>
