<?php

namespace App\Libraries;

use Session;

class Helpers {

    public function __construct(){

    }

    public static function getUserIP(){
        return ($_SERVER['REMOTE_ADDR']==="::1"?"192.168.35.102":$_SERVER['REMOTE_ADDR']);
    }

    public static function getStartingAngle($dataValues){
        // 360° = 100%
        $maxValue = 0;
        foreach ($dataValues as $key => $value) {
            $maxValue += $value['value'];
        }
        $angle = $dataValues!=null?360*($dataValues[0]['value']/$maxValue):0;
        return 90-$angle;
    }

    public static function getPriority($prioridad){
        switch ($prioridad) {
            case 'A':
                $prioridad = "ALTA";
                break;
            case 'B':
                $prioridad = "MEDIA";
                break;
            case 'C':
                $prioridad = "BAJA";
                break;
        }
        return $prioridad;
    }

    public static function getAccess($acceso){
        switch ($acceso) {
            case 0:
                $acceso = "admin";
                break;
            case 1:
                $acceso = "soporte";
                break;
            case 2:
                $acceso = "jefe";
                break;
            case 3:
                $acceso = "user";
                break;
        }
        return $acceso;
    }

}

        