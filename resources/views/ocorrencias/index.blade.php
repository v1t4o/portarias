
<form method="get" action="/ocorrencias">
  <div class="row">
    <div class=" col-sm input-group">
      <input type="text" class="form-control" name="search" value="{{ Request()->search}}">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-success"> Buscar </button>
      </span>
    </div>
  </div>
</form>

<table>
   <tr>
   <th>Tipo</th>
   <th>Patrimonio</th>
   <th>Numero de Série</th>
   <th>Comentário</th>
   <th>ID</th>
   <th>Data de Ocorrencia</th>         
   </tr>
@foreach ($ocorrencias as $ocorrencia)
   <tr>
   <td>{{$ocorrencia->tipo}}</td>
   <td>{{$ocorrencia->patrimonio}}</td>
   <td>{{$ocorrencia->numero_serie}}</td>
   <td>{{$ocorrencia->comentario}}</td>
   <td>{{$ocorrencia->user_id}}</td>
   <td>{{$ocorrencia->data_ocorrencia}}</td>   
   </tr>          
@endforeach
</table>

{{$ocorrencias->appends(request()->query())->links()}}

