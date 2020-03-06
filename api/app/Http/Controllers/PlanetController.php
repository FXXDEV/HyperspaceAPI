<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Planet;

class PlanetController extends Controller
{
    
    public function list(){
        $planets = Http::get('https://swapi.co/api/planets/');
        $planets = $planets["results"];
        return $planets;
        
    }

    public function planetDetails($name){
        $planets = $this->list(); 
        $result = 'Planet not Found';
    
        foreach ($planets as $planet){
            if (strpos($planet["name"], $name)!== false) {
                $result = $planet;
            }
        } 
        //add counter over planetschema 
        return $result;

    }

    public function storeVisitors(Request $request){
        
        if($request->planet_id && $request->user_id){
            Planet::create($request->all());
            return 'Visitor successful contabilized';
        }else{
            return 'Error!';
        }
        
    
    }




}
