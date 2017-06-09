<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use JWTAuth;
use \App\User;
class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $token = isset($request->token)?$request->token:$request->header('x-access-token');
        $user = JWTAuth::toUser($token);
        //
        if($user->tipo==1){// Admin
            $usuarios = User::where('id','!=',$user->id)->where('tipo',3)->get();
            $aux=array();
            foreach ($usuarios as $key => $value) {
                array_push($aux, array(
                    'usuarioID' => $value->id,
                    'nombre' => $value->name,
                    'apellidoPaterno' => $value->appaterno,
                    'apellidoMaterno' => $value->apmaterno,
                    'correo' => $value->email,
                    'gradoID' => (int) $value->idgrado,
                    'tipoUsuario' => (int) $value->tipo
                ));
            }
            $usuarios = $aux;
            return response()->json(['status' => 0, 'alumnos' => $usuarios]);
        }elseif($user->tipo==2){// Profesor
            $alumnos = User::where('idgrado',$user->idgrado)->where('id','!=',$user->id)->where('tipo',3)->get();
            $aux=array();
            foreach ($alumnos as $key => $value) {
                array_push($aux, array(
                    'usuarioID' => $value->id,
                    'nombre' => $value->name,
                    'apellidoPaterno' => $value->appaterno,
                    'apellidoMaterno' => $value->apmaterno,
                    'correo' => $value->email,
                    'gradoID' => (int) $value->idgrado,
                    'tipoUsuario' => (int) $value->tipo
                ));
            }
            $alumnos = $aux;
            return response()->json(['status' => 0, 'alumnos' => $alumnos]);
        }else{
            return response()->json(['status' => 1,'error'=>'Acceso no autorizado.']);    
        }        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$token = isset($request->token)?$request->token:$request->header('x-access-token');
        //$user = JWTAuth::toUser($token);
        //
        $alumno = new User;
        $alumno->name = $request->nombre;
        $alumno->email = $request->correo;
        $alumno->appaterno = $request->apellidoPaterno;
        $alumno->apmaterno = $request->apellidoMaterno;
        $alumno->password = bcrypt("12345");
        $alumno->idgrado = (int) $request->gradoID;
        $alumno->tipo = 3;
        
        $alumno->save();

        return response()->json(['status' => 0]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //$token = isset($request->token)?$request->token:$request->header('x-access-token');
        //$user = JWTAuth::toUser($token);
        //
        $alumno = User::findOrFail($id);
        $alumno->name = $request->nombre;
        $alumno->email = $request->correo;
        $alumno->appaterno = $request->apellidoPaterno;
        $alumno->apmaterno = $request->apellidoMaterno;
        //$alumno->password = $request->password;
        $alumno->idgrado = (int) $request->gradoID;
        //$alumno->tipo = 3;
        
        $alumno->save();

        return response()->json(['status' => 0]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $alumno = User::findOrFail($id);
        $alumno->delete();
        return response()->json(['status' => 0]);
    }
}
