<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nama Aplikasi - @yield('title')</title>
</head>

<body>
    {{-- parent layout nantinya bisa digunakan atau diturunkan untuk masing-masing child --}}
    {{-- @yield(nama, default) --> untuk menandai lokasi template yang harus dibuat atau diimplementasikan nanti di child layout, tetapi pada @yield tidak bisa memberikan nilai default --}}

    {{-- @yield('header') --}}

    {{-- @yield('content') --}}


    {{-- @section - @show --> mirip seperti @yield, untuk menandai lokasi template yang harus dibuat atau diimplementasikan nanti di child layout sekaligus memberikan tampilan default ketika section tidak dioveride di childnya --}}

    @section('header')
        <h1>Default Header</h1>
    @show

    @section('content')
        <p>Default Content</p>
    @show
</body>

</html>
