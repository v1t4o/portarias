<form method="POST" action="/ocorrencias">
@csrf
<label for="patrimonio">Patrimônio:
<input type="text" name="patrimonio" value="" id="patrimonio"></label><br>

<label for="numero_serie">Número de série:</label>
<input type="text" name="numero_serie" value="" id="numero_serie"><br>

<label for="data_ocorrencia">Data de ocorrência</label>
<input type="text" name="data_ocorrencia" value="" id="data_ocorrencia"><br>
<br>

<label for="horario_ocorrencia">Horário da ocorrência</label>
<input type="text" name="horario_ocorrencia" value="" id="horario_ocorrencia"><br>
<br>

<label for="comentario">Comentário:</label><br>
<textarea id="comentario" name="comentario"></textarea><br>
<br>

<label for="tipo">Tipo:</label><br>
    <label for="saida">Saída</label>
    <input type="radio" id="saida" name="tipo" value="saida"><br>
    <label for="entrada">Entrada</label>
    <input type="radio" id="entrada" name="tipo" value="entrada"><br>
    <label for="registro">Registro</label>
    <input type="radio" id="registro" name="tipo" value="resgistro">
    <br>

<button type="submit">Enviar</button>
</form>