<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch Case</title>
</head>

<body>
    {{-- @switch --> untuk melakukan percabangan switch case --}}
    {{-- @break --> agar tidak melanjutkan eksekusi ketika kondisi sudah terpenuhi --}}
    {{-- @default --> nilai default jika kondisi tidak ada yang terpenuhi --}}
    @switch($value)
        @case('A')
            Memuaskan
        @break

        @case('B')
            Bagus
        @break

        @default
            Tidak lulus
    @endswitch
</body>

</html>
