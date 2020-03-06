<?php

use Illuminate\Database\Seeder;
use App\Planet;
class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('planets')->delete();
        $json = Http::get('https://swapi.co/api/planets/');
        $json = $json["results"];
        foreach($data as $obj){
            Planet::create(array(
                'name'=>$obj->name,
                'rotation_period'=>$obj->rotation_period,
                'orbital_period'=>$obj->orbital_period,
                'diameter'=>$obj->diameter,
                'climate'=>$obj->climate,
                'gravity'=>$obj->gravity,
                'terrain'=>$obj->terrain,
                'surface_water'=>$obj->surface_water,
                'population'=>$obj->population,
                'url'=>$obj->url,
            ));
        }
    }
}
