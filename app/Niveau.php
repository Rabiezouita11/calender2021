<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    public function groupes(){
        return $this->hasMany('App\Goupe');
    }
}
