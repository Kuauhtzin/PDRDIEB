<?php

use Illuminate\Database\Seeder;

use App\User;
use DB;
use Model;

class ScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ///////////////////
        /** SOLICITUDES **/
        ///////////////////
        Model::unguard();
        $alumnos = 

        DB::table('solicitudes')->delete();
        $solicitudes = array(
            [
                    'idusuario'=>$value->idusuario,
                    'materia'=>$value->materia,
                    'ejercicio'=>$value->ejercicio,
                    'score'=>$value->score,
                    'fecalta'=>$value->created_at
            ]                
        );
        foreach ($solicitudes as $value){
            DB::table('solicitudes')->insert($value);
        }
        Model::reguard();
    }
}
