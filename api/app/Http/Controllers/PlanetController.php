<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Planet;

class PlanetController extends Controller
{
    
    public function list(){
        $planets = Planet::all();
        if($planets){           
            return response()->json($planets,200);
        }else{
            return response()->json('Error',404);
        }
    }

    public function planetInfoByName($name){
        $planet = Planet::where('name','LIKE',"%$name%")->first();  
        
        if($planet){
            $planet["visit_count"] = $planet->countVisits($planet["id"]);
            return response()->json($planet,200);
        }else{
            return response()->json('Planet not found by this name!',404);
        }
    }

    public function planetInfoById($id){
        $planet = Planet::find($id);
        if($planet){
            $planet["visit_count"] = $planet->countVisits($planet["id"]);
            return response()->json($planet,200);
        }else{
            return response()->json('Planet not found by this id!',404);
        }
    }


}
