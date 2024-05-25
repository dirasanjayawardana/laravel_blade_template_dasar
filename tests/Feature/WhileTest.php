<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WhileTest extends TestCase
{
    public function testwhile()
    {
        $this->view("while", ["value" => 1])
        ->assertSeeText("The current value is 1")
        ->assertSeeText("The current value is 2")
        ->assertSeeText("The current value is 3");
    }
}
