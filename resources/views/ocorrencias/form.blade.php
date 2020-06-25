
<label for="patrimonio">Patrimônio:
<input type="text" name="patrimonio" value="{{ $ocorrencia->patrimonio }}" id="patrimonio"></label><br>

<label for="numero_serie">Número de série:</label>
<input type="text" name="numero_serie" value="{{ $ocorrencia->numero_serie }}" id="numero_serie"><br>

<label for="data_ocorrencia">Data de ocorrência</label>
<input type="text" name="data_ocorrencia" value="{{ $ocorrencia->data_ocorrencia }}" id="data_ocorrencia"><br>
<br>

<label for="horario_ocorrencia">Horário da ocorrência</label>
<input type="text" name="horario_ocorrencia" value="{{ $ocorrencia->horario_ocorrencia }}" id="horario_ocorrencia"><br>
<br>

<label for="comentario">Comentário:</label><br>
<textarea id="comentario" name="comentario" >{{ $ocorrencia->comentario }}</textarea><br>
<br>

<label for="tipo">Tipo:</label><br>
    <label for="saida">Saída</label>
    <input type="radio" id="saida" name="tipo" value="saida" @if($ocorrencia->tipo == "saida")checked @endif><br>
    <label for="entrada">Entrada</label>
    <input type="radio" id="entrada" name="tipo" value="entrada" @if($ocorrencia->tipo == "entrada")checked @endif><br>
    <label for="registro">Registro</label>
    <input type="radio" id="registro" name="tipo" value="registro" @if($ocorrencia->tipo == "registro")checked @endif>
    <br>

<button type="submit">Enviar</button>
