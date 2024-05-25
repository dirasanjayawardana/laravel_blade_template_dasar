<?php

namespace Tests\Feature;

use Tests\TestCase;

class SwitchTest extends TestCase
{
    public function testSwitch()
    {
        $this->view("switch", ["value" => "A"])
            ->assertSeeText("Memuaskan");

        $this->view("switch", ["value" => "B"])
            ->assertSeeText("Bagus");
        $this->view("switch", ["value" => "D"])
            ->assertSeeText("Tidak lulus");
    }
}
