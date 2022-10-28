<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalles extends Model
{
    //
    public function estaciones(){
    
        return $this->hasOne('App\Estaciones','id','detalles_id');
    }
}
