<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //
    protected $table = "materias";

    public function temas()
    {
        return $this->hasMany('App\Tema','idmateria');
    }
    public function grado()
    {
        return $this->belongsTo('App\Grado','idgrado');
    }
}
