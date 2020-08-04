@extends('master')

@section('content')
@parent

@include('alerts')

<form method="POST" action="/users/{{ $user->id }}">
    @csrf
    @method('patch')
    <div class="card">
        <div class="card-header">Edição de usuários</div>
        @include('users.form')
    </div>
</form>

@endsection