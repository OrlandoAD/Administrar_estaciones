<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Versiones extends Model
{
    //

    public function estaciones(){
    
        return $this->hasOne('App\Estaciones','id','versiones_id');
    }
}
