<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stack</title>
</head>

<body>
    {{-- @push(namaStack) dan @pushif(kondisi, namaStack) --> digunakan untuk mengirim data ke stack/blok tertentu, dan diletakkan di paling akhir --}}
    {{-- @prepend(namaStack) --> untuk mengirim data ke stack tertentu pada posisi paling awal --}}
    {{-- @stack(namaStack) --> untuk menampilkan semua data yang terdapat di stack --}}

    @push('script')
        <script src="first.js"></script>
    @endpush
    @push('script')
        <script src="second.js"></script>
    @endpush
    @prepend('script')
        <script src="thrid.js"></script>
    @endprepend

    @stack('script')
</body>

</html>
