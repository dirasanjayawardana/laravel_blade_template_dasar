<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForTest extends TestCase
{
    public function testFor()
    {
        $this->view("for", ["limit" => 3])
            ->assertSeeText("0")
            ->assertSeeText("1")
            ->assertSeeText("2")
            ->assertSeeText("3");
    }
}
