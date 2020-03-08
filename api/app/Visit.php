<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Visit extends Model
{
    protected $table = 'visits';

    protected $fillable = [
        'people_id',
        'planet_id',        
    ];


    public function people()
    {
        return $this->belongsTo('App\People', 'people_id');
        
    }

    public function planet()
    {
        return $this->belongsTo('App\Planet', 'planet_id');
    }

    public function countVisits($id){
        return DB::table('visits')
        ->where('people_id',$id)
        ->count();
    }


}
