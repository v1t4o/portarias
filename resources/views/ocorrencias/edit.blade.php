<form method="POST" action="/ocorrencias/{{ $ocorrencia->id }}">
@csrf
@method('patch')

@include('ocorrencias.form')

</form>