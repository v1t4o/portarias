
<label for="patrimonio">Patrimônio:
<input type="text" name="patrimonio" value="{{old('patrimonio', $ocorrencia->patrimonio)}}" id="patrimonio"></label><br>

<label for="numero_serie">Número de série:</label>
<input type="text" name="numero_serie" value="{{old('numero_serie', $ocorrencia->numero_serie)}}" id="numero_serie"><br>

<label for="data_ocorrencia">Data de ocorrência</label>
<input type="text" class="datepicker" name="data_ocorrencia" value="{{old('data_ocorrencia', $ocorrencia->data_ocorrencia) }}" id="data_ocorrencia"><br>
<br>

<label for="horario_ocorrencia">Horário da ocorrência</label>
<input type="text" name="horario_ocorrencia" value="{{old('horario_ocorrencia', $ocorrencia->horario_ocorrencia) }}" id="horario_ocorrencia"><br>
<br>

<label for="comentario">Comentário:</label><br>
<textarea id="comentario" name="comentario" >{{ old('comentario') }}  @if(isset($ocorrencia)){{ $ocorrencia->comentario }}
@endif</textarea><br>
<br>

<label for="tipo">Tipo:</label><br>
@foreach ($ocorrencia->tipos() as $tipo)
    <label for="{{ $tipo }}">{{ $tipo }}</label>
    <input type="radio" id="tipo" name="tipo" value="{{ $tipo }}" @if($ocorrencia->tipo == "$tipo")checked @else {{ old('tipo') == $tipo ? 'checked' : ''}}@endif><br>
@endforeach  

<br>
<button type="submit">Enviar</button>
