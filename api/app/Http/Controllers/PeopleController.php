<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;

class PeopleController extends Controller
{
  

    public function listPeople(){
        $people = People::all();
        if($people){
            return response()->json($people,200);
        }else{
            return response()->json('Error',404);
        }
        
    }

    public function peopleInfoById($id){
        $people = People::find($id);
        if($people){
            return response()->json($people,200);
        }else{
            return response()->json('People not found by this id!',404);
        }
    }

    public function peopleInfoByName($name){
        $people = People::where('name','LIKE',"%$name%")->first();        
        if($people){
            return response()->json($people,200);
        }else{
            return response()->json('People not found by this name!',404);
        }

    }

    


}
