<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendrier extends Model
{
    public function matieres(){
        return $this->hasMany('Matiere');
    }
}
