<?php

namespace App\Http\Controllers;

use App\Models\Ocorrencia;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\OcorrenciaRequest;
use Illuminate\Validation\Rule;

class OcorrenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ocorrencia = new Ocorrencia;

        if ($request->data_ocorrencia != null && $request->tipo != null){

            $request->validate([
                'data_ocorrencia' => 'data',
                'tipo' => ['required',Rule::in($ocorrencia->tipos())],
            ]);

            $pesquisa = implode('-',array_reverse(explode('/',$request->data_ocorrencia)));   
            $ocorrencias = Ocorrencia::whereDate('data_ocorrencia', $pesquisa)
                                     ->where('tipo', $request->tipo)->paginate(10);

        }else if($request->data_ocorrencia != null) {
            // Garantir que o campo esta no formato: DD/MM/YYYY
            $request->validate([
                'data_ocorrencia' => 'data',
            ]);

            $pesquisa = implode('-',array_reverse(explode('/',$request->data_ocorrencia)));   
            $ocorrencias = Ocorrencia::whereDate('data_ocorrencia', $pesquisa)->paginate(10);
        }else if($request->tipo != null) {
            $ocorrencias = Ocorrencia::where('tipo', $request->tipo)->paginate(10);   
        }else {
            $ocorrencias = Ocorrencia::paginate(10);
        }      
          
        return view('ocorrencias.index')->with([
            "ocorrencias" => $ocorrencias,
            "ocorrencia" => new Ocorrencia
        ]); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ocorrencias.create')->with('ocorrencia', new Ocorrencia);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OcorrenciaRequest $request)
    {
        $validated = $request->validated();

        $validated['data_ocorrencia'] = Carbon::CreatefromFormat('d/m/Y H:i', "$request->data_ocorrencia $request->horario_ocorrencia");
        $validated['user_id'] = 1;
        $ocorrencia=Ocorrencia::create($validated);
        
        return redirect("/ocorrencias/$ocorrencia->id");
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
        return view('ocorrencias.show', compact('ocorrencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Ocorrencia $ocorrencia)
    {
        $data = Carbon::parse($ocorrencia->data_ocorrencia)->format('d/m/Y');
        $hora = Carbon::parse($ocorrencia->data_ocorrencia)->format('H:i');
        $ocorrencia->data_ocorrencia = $data;
        $ocorrencia->horario_ocorrencia = $hora;
        return view('ocorrencias.edit')->with('ocorrencia', $ocorrencia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function update(OcorrenciaRequest $request, Ocorrencia $ocorrencia)
    {
        $validated = $request->validated();

        $validated['data_ocorrencia'] = Carbon::CreatefromFormat('d/m/Y H:i', "$request->data_ocorrencia $request->horario_ocorrencia");
        $validated['user_id'] = 1;
        $ocorrencia->update($validated);
        
        return redirect("/ocorrencias/$ocorrencia->id");

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
        return redirect('/ocorrencias/');
    }
}