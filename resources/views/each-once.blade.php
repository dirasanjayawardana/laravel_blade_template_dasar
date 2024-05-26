<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Each Once</title>
</head>

<body>
    {{-- @each(namaTemplate, dataArray, namaItemVariabel) --> unutk include template berkali kali sesuai dengan iterasi jumlah array --}}
    {{-- @once --> diletakkan di layout, jika layout tersebut ditampilkan berkali-kali, maka bagian @once tetap akan ditampilkan atau dieksekusi sekali saja --}}

    @each('components.user', $users, 'user')
</body>

</html>
