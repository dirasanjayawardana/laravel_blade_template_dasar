<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service Injection</title>
</head>

<body>
    {{-- @inject(namaVariabel, service) --> untuk mengambil object dari Service Container --}}
    {{-- pastikan class sudah di instansiasi atau sudah didaftarkan di provider, contohnya class sayHello sudah didaftarkan di App\Providers\AppServiceProvider.php --}}

    @inject('service', 'App\Services\SayHello')
    <h1>{{ $service->sayHello($name) }}</h1>
</body>

</html>
