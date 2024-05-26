<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachOnceTest extends TestCase
{
    public function testEachOnce()
    {
        $this->view("each-once", [
            "users" => [
                [
                    "name" => "Dira",
                    "hobbies" => ["Coding", "Gaming"]
                ],
                [
                    "name" => "Sanjaya",
                    "hobbies" => ["Coding", "Gaming"]
                ]
            ]
        ])
            ->assertSeeInOrder([".red", "Dira", "Coding", "Gaming", "Sanjaya", "Coding", "Gaming"]);
    }
}
