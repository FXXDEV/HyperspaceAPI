<?php

use Illuminate\Database\Seeder;
use App\People;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->delete();
        $json = Http::get('https://swapi.co/api/people/');
        $this->nextData($json);
      
    }

    private function nextData($json){
        $data = $json["results"];
        $next = $json["next"];
        if(sizeof($data) > 0){
            foreach($data as $obj){
                People::create(array(
                    'name'=>$obj["name"],
                    'height'=>$obj["height"],
                    'mass'=>$obj["mass"],
                    'hair_color'=>$obj["hair_color"],
                    'skin_color'=>$obj["skin_color"],
                    'eye_color'=>$obj["eye_color"],
                    'birth_year'=>$obj["birth_year"],
                    'gender'=>$obj["gender"],
                    'homeworld'=>$obj["homeworld"],
                
                ));
            }
            if($next != null){
                $nextRequest = Http::get($next);
                $this->nextData($nextRequest);
            }
        }
        
    }
}
