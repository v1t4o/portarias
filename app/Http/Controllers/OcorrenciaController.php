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
/*
            $request->validate([
                'abc' => 'required',
            ]);
*/
 
            $pesquisa = implode('-',array_reverse(explode('/',$request->search)));   
            $ = Ocorrencia::whereDate('data_ocorrencia', $pesquisa)->paginate(10);
        } else {
            $ = Ocorrencia::paginate(10);
        }        
        return view('.index')->with("",$); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('.create')->with('ocorrencia', new Ocorrencia);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ocorrencia::create($request->all())
        $ocorrencia = new Ocorrencia;

        $ocorrencia->patrimonio = $request->patrimonio;
        $ocorrencia->data_ocorrencia = Carbon::CreatefromFormat('d/m/Y H:i', "$request->data_ocorrencia $request->horario_ocorrencia");
        $ocorrencia->numero_serie = $request->numero_serie;
        $ocorrencia->tipo = $request->tipo;
        $ocorrencia->comentario = $request->comentario;
        $ocorrencia->user_id = 1;
        $ocorrencia->save();
        
        return redirect("//$ocorrencia->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function show(Ocorrencia $ocorrencia)
    {
        $data = Carbon::parse($ocorrencia->data_ocorrencia)->format('d/m/Y');
        $hora = Carbon::parse($ocorrencia->data_ocorrencia)->format('H:i');
        $ocorrencia->data_ocorrencia = $data;
        $ocorrencia->horario_ocorrencia = $hora;
        return view('.show', compact('ocorrencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OcoPróximoparse($ocorrencia->data_ocorrencia)->format('d/m/Y');
        $hora = Carbon::parse($ocorrencia->data_ocorrencia)->format('H:i');
        $ocorrencia->data_ocorrencia = $data;
        $ocorrencia->horario_ocorrencia = $hora;
        return view('.edit')->with('ocorrencia', $ocorrencia);
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
        
        $ocorrencia->patrimonio = $request->patrimonio;
        $ocorrencia->data_ocorrencia = Carbon::CreatefromFormat('d/m/Y H:i', "$request->data_ocorrencia $request->horario_ocorrencia");
        $ocorrencia->numero_serie = $request->numero_serie;
        $ocorrencia->tipo = $request->tipo;
        $ocorrencia->comentario = $request->comentario;
        $ocorrencia->user_id = 1;
        $ocorrencia->save();

        return redirect("//$ocorrencia->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ocorrencia $ocorrencia)
    {
        $ocorrencia->delete();
        return redirect('/');
    }
}
