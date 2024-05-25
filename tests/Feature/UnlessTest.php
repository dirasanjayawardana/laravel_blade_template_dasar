<?php

namespace Tests\Feature;

use Tests\TestCase;

class UnlessTest extends TestCase
{
    public function testUnless()
    {
        $this->view("unless", ["isAdmin" => true])
            ->assertDontSeeText("You are not admin");

        $this->view("unless", ["isAdmin" => false])
            ->assertSeeText("You are not admin");
    }
}
