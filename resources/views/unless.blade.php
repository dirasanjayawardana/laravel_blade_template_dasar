<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unless Statement</title>
</head>

<body>
    {{-- Unless kebalikan dari if, jika kondisi bernilai false maka isi di dalamnya akan dieksekusi --}}
    @unless ($isAdmin)
        You are not admin
    @endunless
</body>

</html>
