<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExtendingDirectiveTest extends TestCase
{
    public function testExtendingBlade()
    {
        $this->view("extending-directive", ["name" => "Dira"])
            ->assertSeeText("Hello Dira");
    }
}
