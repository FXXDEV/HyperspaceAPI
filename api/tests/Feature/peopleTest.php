<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class peopleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testPeopleList()
    {
        $response = $this->json('GET','/api/people/all');
        $response
            ->assertStatus(200)
            ->assertJsonStructure();
    }

    public function testPeopleDetailsByName()
    {
        $response = $this->json('GET','/api/people/name/Luke');
        $response
            ->assertStatus(200)
            ->assertJsonStructure();
    }
    public function testPeopleDetailsById()
    {
       

        $response = $this->json('GET','/api/people/id/1');
        $response
            ->assertStatus(200)
            ->assertJsonStructure();
    }

}
