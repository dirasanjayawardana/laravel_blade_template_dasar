<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeCondition()
    {
        $this->view("include-condition", [
            "user" => [
                "name" => "Dira",
                "admin" => true
            ]
        ])
            ->assertSeeText("Selamat datang admin")
            ->assertSeeText("Selamat datang Dira");

        $this->view("include-condition", [
            "user" => [
                "name" => "Dira",
                "admin" => false
            ]
        ])
            ->assertDontSeeText("Selamat datang admin")
            ->assertSeeText("Selamat datang Dira");
    }
}
