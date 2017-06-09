<?php

namespace App\Libraries\DataWS\Abrasivos;

class Agentes {

    public function __construct(){

    }

    public static function getData(){
        if(!session()->has('abrasivos.agentes')){
            $agentes = file_get_contents('http://192.168.35.244/WebService/Agentes.ws');
            $agentes = json_decode($agentes, true);

            $aux= array();
            
            foreach ($agentes as $key => $value) {
                if($value['numage']>=81)
                    array_push($aux, array(
                        "numage" => $value['numage'],
                        "nomage" => $value['nomage'],
                        "papage" => $value['papage'],
                        "divage" => $value['divage']
                    ));
            }
            foreach ($agentes as $key => $value) {
                if($value['numage']<81)
                    array_push($aux, array(
                        "numage" => $value['numage'],
                        "nomage" => $value['nomage'],
                        "papage" => $value['papage'],
                        "divage" => $value['divage']
                    ));
            }

            $agentes =  $aux;
            $aux = array();

            for ($i=0; $i <= 5 ; $i++) { 
                foreach ($agentes as $key => $value) {
                    if( $i-1 == abs($value['divage']) )
                        array_push($aux, array(
                            'view' => ($value['numage']<81)?($value['numage'].' '.$value['papage'].' '.$value['nomage']):$value['nomage'],
                            'caption' => ($value['numage']<81)?($value['papage'].' '.$value['nomage']):$value['nomage'],
                            'numage' => $value['numage'],
                            'nomage' => $value['nomage'],
                            'papage' => $value['papage'],
                            'divage' => $value['divage']
                        ));
                }
            }

            $agentes =  $aux;

            session()->put('abrasivos.agentes',$agentes);
        }
    }

    public static function getCaption($id){
        $caption = "GENERAL"; //Default value

        foreach (session()->get('abrasivos.agentes') as $key => $value) {
            if( $value['numage'] == $id ){
                $caption = $value['caption'];
                break;
            }
        }
        return $caption;
    }

        public static function getGerentes(){
        self::getData();
        $gerentes = array();

        foreach (session()->get('abrasivos.agentes') as $key => $value) {
            if( $value['divage'] < 0 ){
                array_push($gerentes, $value);
            }
        }
        return $gerentes;
    }
}
