<?php

namespace Tests\Feature;

use App\Models\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EchoHandlerTest extends TestCase
{
    public function testEchoHandler()
    {
        $person = new Person();
        $person->name = "Dira";
        $person->address = "Jakarta";

        $this->view("echo-handler", ["person" => $person])
            ->assertSeeText("Dira : Jakarta");
    }
}
