<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Planet;

class PlanetController extends Controller
{
    
    public function list(){
        $planets = Http::get('https://swapi.co/api/planets/');
        return $planets->json();
        
    }

    public function planetDetails($name){
        
        $planets = $this->list();        
        $results = array_filter($planets, function($planet) {
            return $planet['name'] == $name;
          });

        return $results;

    }




}
