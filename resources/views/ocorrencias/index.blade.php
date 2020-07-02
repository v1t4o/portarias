<a href="/ocorrencias/create">Cadastrar ocorrência<a>
<br>
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
   <td><a href="/ocorrencias/{{$ocorrencia->id}}/edit">Editar</a><a href="/ocorrencias/{{$ocorrencia->id}}"> Ver</a></td>
   <td>
      <form action="/ocorrencias/{{ $ocorrencia->id }} " method="post">
      @csrf  @method('delete')
      <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button> 
      </form> 
   </td>
   </tr>          
@endforeach
</table>

{{$ocorrencias->appends(request()->query())->links()}}

