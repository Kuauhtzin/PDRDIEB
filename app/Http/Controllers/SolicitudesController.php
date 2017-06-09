<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Solicitud;
use App\Grado;

use Carbon;
use JWTAuth;


class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $solicitudes = Solicitud::all();
        $aux = array();
        foreach ($solicitudes as $key => $value) {
            array_push($aux, array(
                    'solicitudID' => $value->id,
                    'titulo' => $value->titulo,
                    'comentarios' => $value->comentarios,
                    'grado' => $value->grado,
                    'materia' => $value->materia,
                    'tema' => $value->tema,
                    'fechaSolicitud' => Carbon::createFromFormat('Y-m-d H:i:s', $value->created_at)->toDateTimeString(),
                    'usuario' => $value->usuario
                ));
        }
        $solicitudes = $aux;

        return response()->json([
                'status' => 0,
                'solicitudes' => $solicitudes
            ]);

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
        $token = isset($request->token)?$request->token:$request->header('x-access-token');
        $user = JWTAuth::toUser($token);
        //
        $solicitud = new Solicitud;
        $solicitud->titulo = $request->titulo;
        $solicitud->grado = $request->grado;
        $solicitud->materia = $request->materia;
        $solicitud->tema = $request->tema;
        $solicitud->comentarios = $request->comentarios;
        $solicitud->usuario = $user->appaterno.' '.$user->apmaterno.' '.$user->name;
        $solicitud->save();

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
        $solicitud = Solicitud::findOrFail($id);
        $solicitud->delete();
        return response()->json(['status' => 0]);
    }
}
