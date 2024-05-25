<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loo Variabel</title>
</head>

<body>
    {{-- setiap perulangan seperti for, foreach, forelse, atau while, terdapat object bernama loop untuk mendapatkan informasi tentang loopingnya --}}
    {{-- $loop->index (mendapatkan index ke berapa dari looping saat ini, dimulai dari 0) --}}
    {{-- $loop->iteration (mendapatkan iterasi keberapa dari looping saat ini, dimulai dari 1) --}}
    {{-- $loop->remaining (mendapatkan sisa iterasi) --}}
    {{-- $loop->count (mendapatkan jumlah item dari array yang akan diiterasi) --}}
    {{-- $loop->first (mengecek apakah sedang berada di iterasi pertama) --}}
    {{-- $loop->last (mengecek apakah sedang berada di iterasi terakhir) --}}
    {{-- $loop->even (mengecek apakah sedang berada di iterasi genap) --}}
    {{-- $loop->odd (mengecek apakah sedang berada di iterasi ganjil) --}}
    {{-- $loop->depth (mengambil data dari iterasi didalamnya/childnya) --}}
    {{-- $loop->parent (mengambil data dari iterasi diluarnya/parentnnya) --}}

    <ul>
        @foreach ($hobbies as $item)
            <li>{{ $loop->iteration }}. {{ $item }}</li>
        @endforeach
    </ul>
</body>

</html>
