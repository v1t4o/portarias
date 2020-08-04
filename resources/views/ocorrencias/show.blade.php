@extends('master')

@section('content')
@parent
<div class="row">
Tipo: {{$ocorrencia->tipo}}<br>
Patrimônio: {{$ocorrencia->patrimonio}}<br>
Número de Série: {{$ocorrencia->numero_serie}}<br>
Comentário: {{$ocorrencia->comentario}}<br>
ID: {{$ocorrencia->user_id}}<br>
Data Ocorrência: {{$ocorrencia->data_ocorrencia}}<br>
Horário Ocorrência: {{$ocorrencia->horario_ocorrencia}}<br>
<a href="/ocorrencias">Voltar</a><br> <br>
<a href="/ocorrencias/{{$ocorrencia->id}}/edit">Editar</a></br>
</div>
<br>
<div class="row">
<form action="/ocorrencias/{{ $ocorrencia->id }} " method="post">
      @csrf  @method('delete')
      

      
      <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button> 
      </form> <br>
</div>
@endsection