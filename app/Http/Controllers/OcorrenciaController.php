<?php

namespace App\Http\Controllers;

use App\Ocorrencia;
use Illuminate\Http\Request;

class OcorrenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /* A data chegará assim: 25/02/2019 -> ocorrências desse dia */
        # 25/02/2019: 2019-02-25 00:00:00 até 2019-02-25 23:59:59
        # 2017-07-13 22:03:21
        if ($request->search != null) {
 
            $pesquisa = implode('-',array_reverse(explode('/',$request->search)));   
            dd($ocorrencias = Ocorrencia::whereBetween('data_ocorrencia', array($pesquisa, $pesquisa))->toSql());
            $pesquisa = '2020-06-18';
            $ocorrencias = Ocorrencia::whereBetween('data_ocorrencia', array($pesquisa, $pesquisa))->paginate(10);
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
