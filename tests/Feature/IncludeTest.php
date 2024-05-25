<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view("include", [])
            ->assertSeeText("Dira Sanjaya Wardana")
            ->assertSeeText("Selamat membaca")
            ->assertSeeText("Selamat datang di DirApp");

        $this->view("include", ["title" => "Header DirApp"])
            ->assertSeeText("Header DirApp")
            ->assertSeeText("Selamat membaca")
            ->assertSeeText("Selamat datang di DirApp");
    }
}
