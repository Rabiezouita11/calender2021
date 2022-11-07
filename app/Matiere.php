<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{

    public function calendrier(){
        return $this->belongsTo('Calendrier');
    }
}
