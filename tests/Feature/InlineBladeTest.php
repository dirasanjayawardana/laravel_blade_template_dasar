<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class InlineBladeTest extends TestCase
{
    // Facade Blade --> untuk mengakses blade template dari class
    // Blade::render("isi templatenya", [data]) --> untuk merender template tanpa harus membuat file templatenya, cukup string saja
    public function testInlineBladeTemplate()
    {
        $response = Blade::render('Hello {{$name}}', ["name" => "Dira"]);
        self::assertEquals("Hello Dira", $response);
    }

    // Blade::directive(nama, function) --> untuk menambahkan custom directive, pastikan nama tidak bentrok dengan directive yang sudah ada, function akan dieksekusi ketika directive digunakan
    // directive harus diregistrasikan di service provider
}
