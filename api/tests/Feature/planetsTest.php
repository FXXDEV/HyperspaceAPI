<?php

namespace Tests\Feature;
use Tests\TestCase;

class planetsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPlanetsList()
    {
        $response = $this->json('GET','/api/planets/all');
        $response
            ->assertStatus(200)
            ->assertJsonStructure();
    }

    public function testPlanetDetailsByName()
    {
        $response = $this->json('GET','/api/planets/name/Alde');
        $response
            ->assertStatus(200)
            ->assertJsonStructure();
    }
    public function testPlanetDetailsById()
    {
        $response = $this->json('GET','/api/planets/id/1');
        $response
            ->assertStatus(200)
            ->assertJsonStructure();
    }

    


}
