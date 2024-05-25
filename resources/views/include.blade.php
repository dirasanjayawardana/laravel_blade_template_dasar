<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Include</title>
</head>

<body>
    {{-- @Include("folder.namaComponent", data) --> untuk memanggil component --}}
    {{-- data pada parameter di component bisa diisi dari directive @include atau saat pemanggilan view utamanya --}}
    @Include("components.header", ["description" => "Selamat membaca"])
    <p>Selamat datang di DirApp</p>
</body>

</html>
