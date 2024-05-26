<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", [
            "user" => [
                "name" => "Dira",
                "premium" => true,
                "admin" => true
            ]
        ])
            ->assertSee('checked')
            ->assertSee("Dira")
            ->assertDontSee("readonly");


        $this->view("form", [
            "user" => [
                "name" => "Dira",
                "premium" => false,
                "admin" => false
            ]
        ])
            ->assertDontSee('checked')
            ->assertSee("Dira")
            ->assertSee("readonly");
    }
}
