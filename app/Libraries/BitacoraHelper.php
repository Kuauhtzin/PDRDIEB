<?php

namespace App\Libraries;

use App\Bitacora;
use Session;
use App\Libraries\Helpers;

class BitacoraHelper {

    public function __construct(){

    }

    public static function insert($nomcia,$modulo){
        $bitacora = new Bitacora;
        $bitacora->idusr = session()->get('auth.id');
        $bitacora->nomusr = session()->get('auth.nomusr');
        $bitacora->ipusr  = Helpers::getUserIP();
        $bitacora->fecusr=date("d-m-Y");
        $bitacora->horusr=date("H:i:s");
        $bitacora->nomcia = $nomcia;
        $bitacora->modulo = $modulo;
        $bitacora->save();
    }

}

        