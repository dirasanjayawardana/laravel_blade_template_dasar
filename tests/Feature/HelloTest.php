<?php

namespace Tests\Feature;

use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get("/hello")
            ->assertSeeText("Hello Dira");
    }

    public function testHelloWorld()
    {
        $this->get("/hello-world")
            ->assertSeeText("Hello World Dira");
    }

    public function testViewWithoutRouting()
    {
        $this->view("hello", ["name" => "Dira"])
            ->assertSeeText("Hello Dira");
    }
}
