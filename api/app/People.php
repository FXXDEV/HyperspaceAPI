<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class People extends Model
{
    protected $table = 'people';

    protected $fillable = [
        'name',
        'height',
        'mass',
        'hair_color',
        'skin_color',
        'eye_color',
        'birth_year',
        'gender',
        'homeworld',
        
    ];
    
    public function countVisits($id){
        return DB::table('visits')
        ->where('people_id',$id)
        ->count();
    }
}
