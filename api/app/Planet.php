<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Planet extends Model
{
    protected $table = 'planets';

    protected $fillable = [
        'name',
        'rotation_period',
        'orbital_period',
        'diameter',
        'climate',
        'gravity',
        'terrain',
        'surface_water',
        'population',
        'url',
    ];

    public function countVisits($id){
        return DB::table('visits')
        ->where('people_id',$id)
        ->count();
    }
    
}
