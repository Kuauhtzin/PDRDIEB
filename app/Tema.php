<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    //
    protected $table = "temas";
    
    public function materia()
    {
        return $this->belongsTo('App\Materia','idtema');
    }
}
