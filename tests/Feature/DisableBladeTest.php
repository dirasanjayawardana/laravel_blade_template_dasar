<?php

namespace Tests\Feature;

use Tests\TestCase;

class DisableBladeTest extends TestCase
{

    public function testDisableBlade()
    {
        $this->view("disable-blade", ["name" => "Dira"])
            ->assertDontSeeText("Dira")
            ->assertSeeText('Hello {{ $name }}');
    }
}
