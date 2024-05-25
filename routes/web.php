<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Logic untuk Route sebaiknya disimpan dalam controller
// jika ada Route yang konflik ada ada route yang sama, maka tidak akan terjadi error, tetapi laravel akan mengeksekusi route yang paling atas
// untuk melihat semua routing di laravel --> php artisan route:list


Route::get('/', function () {
    return view('welcome');
});


// cara1 menampilkan view --> langsung menggunakan class static view
// Route::view('uri', 'folder.namaFileViewnya', ['data' => 'value']);
Route::view('/hello', 'hello', ['name' => "Dira"]);


// cara2 menampilkan view --> dengan menggunakan closure
// Route::get('uri', function () {
//    return view('folder.namaFileViewnya', ['data' => 'value']);
// });
Route::get('/hello-world', function () {
    return view('hello.world', ['name' => 'Dira']);
});


// HTML Encoding
Route::get("/html-encoding", function (Request $request) {
    return view("html-encoding", ["name" => $request->input("name")]);
});


// Disable Blade
Route::get("/disable-blade", function () {
    return view("disable-blade", ["name" => "Dira"]);
});


// If statement
Route::get("/if", function () {
    return view("if", ["hobbies" => ["gaming", "music", "coding"]]);
});


// class
Route::get("/class", function () {
    return view("class", [
        "hobbies" => [
            [
                "name" => "Coding",
                "love" => false
            ],
            [
                "name" => "Gaming",
                "love" => true
            ],
            [
                "name" => "Music",
                "love" => false
            ],

        ]
    ]);
});


// include
Route::get("/include", function () {
    return view("include", ["title" => "Header DirApp"]);
});
