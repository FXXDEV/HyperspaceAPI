<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use App\Planet;
use Validator;
use DB;

class VisitController extends Controller
{
    public function storeVisitors(Request $request){
        $validator = Validator::make($request->all(), 
            [
                'people_id' => 'required|exists:people,id',
                'planet_name' => 'required|max:255',
            ],
            [   
                'people_id.required'=> 'people_id is a required field',
                'people_id.exists'=> 'this people_id not found',
                'planet_name.required'=> 'planet_name is a required field',
                'planet_name.max'=> 'planet_name is limited at 255 characters',
            ]
        );

        if ($validator->fails()) {    
            return response()->json($validator->messages(), 500);
        }else{

            $planet = Planet::where('name','LIKE',"%$request->planet_name%")->first(['id']);
            if($planet){
                Visit::create(array_merge($request->all(),['planet_id' => $planet["id"]]));      
                return response()->json('Sucessful insert',200);    
            }else{
                return response()->json('Planet not found',404); 
            }
            
            
        }
    }


    public function rankingVisitors(){
        $visits = Visit::get(['planet_id','people_id'])->unique('people_id');

        $ranking = array();
        foreach($visits as $v){
            $position = [
                'planet_name' => $v->planet["name"],
                'people_name' => $v->people["name"],
                'count'=> $v->countVisits($v->people_id),
            ];
            array_push($ranking,$position);
        }

        
        array_multisort(array_column($ranking, 'count'), SORT_DESC, $ranking);
        return response()->json($ranking,200);
    }

    public function listVisits(){
        $visits = Visit::all();
        $visitsArray = array();

        foreach($visits as $v){
            $arr = [
                'planet_name' => $v->planet["name"],
                'people_name' => $v->people["name"],
                'visit_date'=> $v->created_at->format('d/m/Y')
                
            ];
            array_push($visitsArray,$arr);
        }


        return response()->json($visitsArray,200);
    }
}
