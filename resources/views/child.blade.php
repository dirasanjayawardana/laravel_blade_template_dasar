{{-- @extend(namaParent) --> pada child layout harus extend dari parentnya --}}
{{-- @section(nama) --> untuk meletakkan isi layout sesuai dengan yield yang telah dibuat di parentnya --}}

@extends('parent')

{{-- untuk section yang sederhana bisa langsung @section(nama, value) --}}
@section('title', 'Halaman Utama')

{{-- jika section tidak dioveride maka akan menampilkan tampilan default dari parent --}}
@section('header')
    {{-- @parent --> tidak menimpa tampilan defaultnya, tetapi menambahkan --}}
    @parent
    <h1>Deskripsi Header</h1>
@endsection

@section('content')
    <p>Ini adalah halaman utama</p>
@endsection
