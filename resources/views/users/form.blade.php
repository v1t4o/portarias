
<label for="name">Nome:
<input type="text" name="name" value="{{old('name', $user->name)}}" id="name"></label><br><br>

<label for="email">Email:</label>
<input type="text" name="email" value="{{old('email', $user->email)}}" id="email"><br><br>

<label for="codigo_vigia">Código:</label>
<input type="text" name="codigo_vigia" value="{{old('codigo_vigia', $user->codigo_vigia)}}" id="codigo_vigia"><br>
<br>

<label for="codpes">Número USP:</label>
<input type="text" name="codpes" value="{{old('codpes', $user->codpes)}}" id="codpes"><br>
<br>


<label for="password">Senha:</label>
<input type="password" name="password" id="password"><br>

<br>
<label for="password">Repetir Senha:</label>
<input type="password" name="password_repeat"><br>

<br>
<button type="submit">Enviar</button>

