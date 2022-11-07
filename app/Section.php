<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{    public function Groupes(){
    return $this->hasMany('App\Groupe');
}

}
