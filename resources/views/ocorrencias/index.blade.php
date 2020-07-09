@extends('master')

@section('content')
@parent
<a class="btn btn-info" href="/ocorrencias/create">Cadastrar ocorrência<a></a>  
<br>
<div class="row">
<form method="get" action="/ocorrencias">

   @foreach ($ocorrencia->tipos() as $tipo)
      <div>
         <input type="radio" id="tipo" name="tipo" value={{$tipo}} @if(Request()->tipo == $tipo) checked @endif>
         <label for="tipo" >{{$tipo}}</label>
      </div>
   @endforeach

    <div class=" col-sm input-group">
      <input type="text" class="form-control datepicker" name="data_ocorrencia" value="{{ Request()->data_ocorrencia}}" autocomplete="off">

      <span class="input-group-btn">
        <button type="submit" class="btn btn-success"> Buscar </button>
      </span>
    </div>
</form>
</div>


<table class="table table-striped">
   <tr>
   <th>Tipo</th>
   <th>Patrimonio</th>
   <th>Numero de Série</th>
   <th>Comentário</th>
   <th>ID</th>
   <th>Data de Ocorrencia</th> 
   <th>Ações</th>          
   </tr>
@foreach ($ocorrencias as $ocorrencia)
   <tr>
   <td>{{$ocorrencia->tipo}}</td>
   <td>{{$ocorrencia->patrimonio}}</td>
   <td>{{$ocorrencia->numero_serie}}</td>
   <td>{{$ocorrencia->comentario}}</td>
   <td>{{$ocorrencia->user_id}}</td>
   <td>{{$ocorrencia->data_ocorrencia}}</td> 
   <td><a href="/ocorrencias/{{$ocorrencia->id}}/edit">Editar</a><a href="/ocorrencias/{{$ocorrencia->id}}"> Ver</a>
      <form action="/ocorrencias/{{ $ocorrencia->id }} " method="post">
      @csrf  @method('delete')
      

      
      <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button> 
      </form> 
   </td>
   </tr>          
@endforeach
</table>
<div>
{{$ocorrencias->appends(request()->query())->links()}}
</div>

@endsection




