<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Echo Handler</title>
</head>

<body>
    {{-- saat menggunakan {{ $variable }}, secara otomatis blade template akan mengkonversinya menjadi echo($variabel)->__toString() --}}
    {{-- untuk kasus tertentu, kita tidak ingin mengubahnya, misal ketika datanya berupa object, kita ingin mengubah hasil stringnya --}}
    {{-- bisa menggunakan Blade::stringable(class, function) yang sudah didaftarkan di App\Providers\AppServideProvider.php --}}
    {{ $person }}
</body>

</html>
