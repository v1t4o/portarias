@extends('master')

@section('content')
@parent

<div class="card">
  <div class="card-header"><h3>Dados do Vigia<h3></div>
  <div class="row">

    <div class="col-sm">
        <br>
        <b>Nome:</b> {{ $user->name }}
        <br>
        <b>Email:</b> {{ $user->email }}
        <br>
        <b>Código:</b> {{ $user->codigo_vigia }}
        <br>
        <b>Número USP:</b> {{ $user->codpes }}
        <br>              
    </div>
 </div>
</div>
@endsection('content')