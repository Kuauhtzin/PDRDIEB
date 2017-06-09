<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    //
    protected $table = "grados";

    public function materias()
    {
        return $this->hasMany('App\Materia','idgrado');
    }

    public function temas()
	{
    	return $this->hasManyThrough('App\Tema', 'App\Materia','idgrado','idmateria');
	}
}
