<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
</head>

<body>
    {{-- @error(field) --> untuk menangkap error dan menangkap messagenya dengan variabel $message --}}
    @error('name')
        <p>{{ $message }}</p>
    @enderror

    @error('password')
        <p>{{ $message }}</p>
    @enderror
</body>

</html>
