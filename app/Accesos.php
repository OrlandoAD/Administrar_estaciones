<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accesos extends Model
{
    //

    public function estaciones(){
    
        return $this->hasOne('App\Estaciones','id','accesos_id');
    }
}
