<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StackTest extends TestCase
{
    public function testStack()
    {
        $this->view("stack", [])
        ->assertSeeInOrder(["thrid.js", "first.js", "second.js"]);
    }
}
