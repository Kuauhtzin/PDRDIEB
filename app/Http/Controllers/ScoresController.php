<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Score;

class ScoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $scores = Score::all();
        $aux = array();
        foreach ($scores as $key => $value) {
            array_push($aux, array(
                    'idusuario'=>$value->idusuario,
                    'materia'=>$value->materia,
                    'ejercicio'=>$value->ejercicio,
                    'score'=>$value->score,
                    'fecalta'=>$value->created_at
                ));
        }

        return response()->json(['status'=>0,'scores'=>$scores]);
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
        //
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
        $scores = Score::where('idusuario',$id)->get();
        $aux = array();
        foreach ($scores as $key => $value) {
            array_push($aux, array(
                    'idusuario'=>$value->idusuario,
                    'materia'=>$value->materia,
                    'ejercicio'=>$value->ejercicio,
                    'score'=>$value->score,
                    'fecalta'=>$value->created_at
                ));
        }
        

        return response()->json(['status'=>0,'scores'=>$scores]);
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
    }
}
