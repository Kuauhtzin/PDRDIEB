<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Grado;
use App\Materia;
use App\Tema;

class GradosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $grados = Grado::all();
        $aux = array();

        foreach ($grados as $i => $grado) {
            $materias = $grado->materias;
            array_push($aux,array('gradoID'=>$grado->id,'grado'=>$grado->name,'materias'=>array()));
            foreach ($materias as $j => $materia) {
                $temas = $grado->temas;
                if(isset($aux[$i]['materias']))
                array_push($aux[$i]['materias'],array('nombre'=>$materia->name,'temas'=>array()));
                foreach ($temas as $tema) {
                    if(isset($aux[$i]['materias'][$j]['temas']))
                    array_push($aux[$i]['materias'][$j]['temas'],$tema->name);
                }
            }
        }
        
        $grados = $aux;

        return response()->json([
                'status' => 0,
                'grados' => $grados
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
