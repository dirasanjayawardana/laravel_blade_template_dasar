<?php

namespace App\Providers;

use App\Models\Person;
use App\Services\SayHello;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SayHello::class, function ($app) {
            return new SayHello();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Blade::directive(nama, function) --> untuk menambahkan custom directive, pastikan nama tidak bentrok dengan directive yang sudah ada, function akan dieksekusi ketika directive digunakan
        // directive harus diregistrasikan di service provider
        // $expression --> data yang dikirimkan ke view
        // return harus berupa code php
        Blade::directive('hello', function ($expression) {
            return "<?php echo 'Hello ' . $expression; ?>";
        });


        // saat menggunakan {{ $variable }}, secara otomatis blade template akan mengkonversinya menjadi echo($variabel)-->__toString()
        // untuk kasus tertentu, kita tidak ingin mengubahnya, misal ketika datanya berupa object, kita ingin mengubah hasil stringnya
        // bisa menggunakan Blade::stringable(class, function)
        Blade::stringable(Person::class, function (Person $person) {
            return "$person->name : $person->address";
        });
    }
}
