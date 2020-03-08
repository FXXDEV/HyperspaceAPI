<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class visitsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
 

     public function testRanking()
     {
        $response = $this->json('GET','/api/visits/ranking');
        $response
            ->assertStatus(200)
            ->assertJsonStructure();
       
     }

     public function testVisitsList()
     {
        $response = $this->json('GET','/api/visits/list');
        $response
            ->assertStatus(200)
            ->assertJsonStructure();
        
     }

     public function testStoreVists()
     {
        
     }



}
