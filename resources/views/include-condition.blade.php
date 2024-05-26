<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Include Condition</title>
</head>

<body>
    {{-- Include Condition --> melakukan include component ketika kondisi tertentu terpenuhi --}}
    {{-- @includeWhen(kondisi, namaTemplate, [data]); --> akan di include ketika kondisi bernilai true --}}
    {{-- @includeUnless(kondisi, namaTemplate, [data]); --> akan di include ketika kondisi bernilai false --}}
    @includeWhen($user['admin'], 'components.header-admin', [])
    <p>Selamat datang {{ $user['name'] }} </p>
</body>

</html>
