<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IsSetEmptyTest extends TestCase
{
    public function testIsSetEmpty()
    {
        $this->view("isset-empty", [])
            ->assertDontSeeText("Hello");

        $this->view("isset-empty", ["name" => "dira"])
            ->assertSeeText("Hello my name is dira")
            ->assertSeeText("I don't have hobbies", false);

        $this->view("isset-empty", ["name" => "dira", "hobbies" => ["Coding", "Gaming"]])
            ->assertSeeText("Hello my name is dira")
            ->assertDontSeeText("I don't have hobbies", false);
    }
}
