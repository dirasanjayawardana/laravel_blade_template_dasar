<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForelseTest extends TestCase
{
    public function testForelse()
    {
        $this->view("forelse", ["hobbies" => []])
            ->assertSeeText("Tidak ada hobi");

        $this->view("forelse", ["hobbies" => ["Coding", "Gaming"]])
            ->assertSeeText("Coding")
            ->assertSeeText("Gaming");
    }
}
