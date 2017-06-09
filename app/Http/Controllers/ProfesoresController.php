<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use JWTAuth;
use \App\User;
class ProfesoresController extends Controller
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
            $profesores = User::where('tipo',2)->get();
            $aux=array();
            foreach ($profesores as $key => $value) {
                array_push($aux, array(
                    'usuarioID' => $value->id,
                    'nombre' => $value->name,
                    'apellidoPaterno' => $value->appaterno,
                    'apellidoMaterno' => $value->apmaterno,
                    'correo' => $value->email,
                    'gradoID' => (int) $value->idgrado
                ));
            }
            $profesores = $aux;
            return response()->json(['status' => 0, 'profesores' => $profesores]);
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
        $profesor = new User;
        $profesor->name = $request->nombre;
        $profesor->email = $request->correo;
        $profesor->appaterno = $request->apellidoPaterno;
        $profesor->apmaterno = $request->apellidoMaterno;
        $profesor->password = bcrypt("12345");
        $profesor->idgrado = (int) $request->gradoID;
        $profesor->tipo = 2;

        $profesor->save();

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
        $profesor = User::findOrFail($id);
        $profesor->name = $request->nombre;
        $profesor->email = $request->correo;
        $profesor->appaterno = $request->apellidoPaterno;
        $profesor->apmaterno = $request->apellidoMaterno;
        //$profesor->password = $request->password;
        $profesor->idgrado = (int) $request->gradoID;
        //$profesor->tipo = 3;
        
        $profesor->save();

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
        $profesor = User::findOrFail($id);
        $profesor->delete();
        return response()->json(['status' => 0]);
    }
}
