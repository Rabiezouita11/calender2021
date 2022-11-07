<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{

    public function Section(){
        return $this->belongsTo('App\Section');
    }
    public function Niveau(){
        return $this->belongsTo('App\Niveau');
    }}
