@extends('master')

@section('content')
@parent
 
<br>
<div class="row">
<form method="get" action="/users">

   Buscar Por:<br>
   @foreach ($user->tipos() as $tipo)
      <div>
         <input type="radio" id="tipo" name="tipo" value={{$tipo}} @if(Request()->tipo == $tipo) checked @endif>
         <label for="tipo" >{{$tipo}}</label>
      </div>
   @endforeach

      <!--
      <div>
      Buscar Por:<br>
         <label for="nome">Nome</label>
         <input type="radio" id="tipobusca" name="tipobusca" value="nome"><br>
         <label for="codigopessoa">Código Pessoal</label>
         <input type="radio" id="tipobusca" name="tipobusca" value="codigopessoa"><br>
         <label for="codigovigia">Código do Vígia</label>
         <input type="radio" id="tipobusca" name="tipobusca" value="codigovigia">
      </div>
      -->

      <!-- 
      <div>
      Buscar Por:<br>
         <label for="nome">Nome</label>
         <input type="radio" id="nome" name="tipobusca" value="{{Request()->tipobusca = 'nome'}}"><br>
         <label for="codigopessoa">Código Pessoal</label>
         <input type="radio" id="codigopessoa" name="tipobusca" value="{{Request()->tipobusca = 'codigopessoa'}}"><br>
         <label for="codigovigia">Código do Vígia</label>
         <input type="radio" id="codigovigia" name="tipobusca" value="{{Request()->tipobusca = 'codigovigia'}}">
      </div>
      -->

    <div class=" col-sm input-group">
      <input type="text" value="{{Request()->busca}}" autocomplete="off">

      <span class="input-group-btn">
        <button type="submit" class="btn btn-success"> Buscar </button>
      </span>
    </div>
</form>
</div>


<table class="table table-striped">
   <tr>
   <th>Nome</th>
   <th>Email</th>
   <th>Código do Vígia</th>         
   </tr>
@foreach ($users as $user)
   <tr>
   <td>{{$user->name}}</td>
   <td>{{$user->email}}</td>
   <th>{{$user->codigo_vigia}}</th> 
   </tr>          
@endforeach
</table>
<div>
{{$users->appends(request()->query())->links()}}
</div>

@endsection