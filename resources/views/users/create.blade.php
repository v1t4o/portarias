
@extends('laravel-usp-theme::master')

@section('content')

@include('alerts')

<form method="POST" action="/users"> 
@csrf
  <div class="card">
    <div class="card-header">Cadastro de Usuário</div>
    <div class="card-body">
    @include('users.form')
    </div>
  </div>
</form>

@endsection('content')