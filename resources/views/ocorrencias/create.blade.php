@extends('master')

@section('content')
@parent
<form method="POST" action="/ocorrencias">
@csrf

@include('ocorrencias.form')

</form>

@endsection