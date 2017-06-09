<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Grado;
use App\Materia;
use App\Tema;
use App\Solicitud;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ////////////////
        /** USUARIOS **/
        ////////////////
        Model::unguard();
        DB::table('users')->delete();
        $users = array(
            [
                'name' => 'Luis',
                'email' => 'luis@mail.com',
                'password' => Hash::make('12345'),
                'appaterno' => 'Celis',
                'apmaterno' => 'Castañeda',
                'idgrado' => null,
                'tipo' => 1
            ],
            [
                'name' => 'Elsa Gabriela',
                'email' => 'prof@mail.com',
                'password' => Hash::make('12345'),
                'appaterno' => 'Rodriguez',
                'apmaterno' => 'Jiménez',
                'idgrado' => 1,
                'tipo' => 2
            ],
            [
                'name' => 'Marco',
                'email' => 'marco@mail.com',
                'password' => Hash::make('12345'),
                'appaterno' => 'Franco',
                'apmaterno' => 'Aguilar',
                'idgrado' => 1,
                'tipo' => 3
            ]

                
        );
        foreach ($users as $value){
            User::create($value);
        }
        Model::reguard();
        //////////////
        /** GRADOS **/
        //////////////
        Model::unguard();
        DB::table('grados')->delete();
        $grados = array(
            [ 'name' => '5°' ]                
        );
        foreach ($grados as $value){
            DB::table('grados')->insert($value);
        }
        Model::reguard();
        ////////////////
        /** MATERIAS **/
        ////////////////
        Model::unguard();
        DB::table('materias')->delete();
        $materias = array(
            [
                'name' => 'Matemáticas',
                'idgrado' => 1
            ]                
        );
        foreach ($materias as $value){
            DB::table('materias')->insert($value);
        }
        Model::reguard();
        /////////////
        /** TEMAS **/
        /////////////
        Model::unguard();
        DB::table('temas')->delete();
        $temas = array(
            [
                'name' => 'Sumas',
                'idmateria' => 1
            ],
            [
                'name' => 'Restas',
                'idmateria' => 1
            ],
            [
                'name' => 'Multiplicación',
                'idmateria' => 1
            ],
            [
                'name' => 'División',
                'idmateria' => 1
            ]                
        );
        foreach ($temas as $value){
            DB::table('temas')->insert($value);
        }
        Model::reguard();
        ///////////////////
        /** SOLICITUDES **/
        ///////////////////
        Model::unguard();
        DB::table('solicitudes')->delete();
        $solicitudes = array(
            [
                'titulo' => 'Ejercicio para suma',
                'comentarios' => "Que se vea bonita :)",
                'grado' => "5°",
                'materia' => "Matemáticas°",
                'tema' => "Sumas",
                'usuario' => "Rodriguez Jiménez Elsa Gabriela",
                'created_at' => '2017-05-16 04:09:04'
            ]                
        );
        foreach ($solicitudes as $value){
            DB::table('solicitudes')->insert($value);
        }
        Model::reguard();


    }
}