<?php

namespace App\Http\Controllers;

use App\Ocorrencia;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OcorrenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->search != null) {
 
            $pesquisa = implode('-',array_reverse(explode('/',$request->search)));   
            $ocorrencias = Ocorrencia::whereDate('data_ocorrencia', $pesquisa)->paginate(10);
        } else {
            $ocorrencias = Ocorrencia::paginate(10);
        }        
        return view('ocorrencias.index')->with("ocorrencias",$ocorrencias); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('ocorrencias/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ocorrencia = new Ocorrencia;
        
        $ocorrencia->patrimonio = $request->patrimonio;
        $ocorrencia->data_ocorrencia = Carbon::CreatefromFormat('d/m/Y H:i', "$request->data_ocorrencia $request->horario_ocorrencia");
        $ocorrencia->numero_serie = $request->numero_serie;
        $ocorrencia->tipo = $request->tipo;
        $ocorrencia->comentario = $request->comentario;
        $ocorrencia->user_id = 1;
        $ocorrencia->save();
        
        return redirect('/ocorrencias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function show(Ocorrencia $ocorrencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Ocorrencia $ocorrencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ocorrencia $ocorrencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ocorrencia $ocorrencia)
    {
        //
    }
}
