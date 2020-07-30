Mais um live condig STI FFLCH

Coloque seu nome:

- Thiago
- Gabriela
- Ricardo
- laura
- Victor
- Gabriel


CRUD para cadastro de vígia: código vigia, email, senha e nome. Na index, busca pelo código do vigia.

Etapas:

1. Criar rotas para User.
2. Criar o Controller: php artisan make:Controller UserController -r
?? Faker e Seed

3. Implementação do index: UserController.php, users/index.blade.php
 - Listar os usuários
 - Busca de usuários por: nome, codpes, codigo_vigia
 - Paginação
 - Coluna: Funcionário USP ou Vigia

4. Validações (app/Http/Requests/UserRequest.php):
 - nome requerido
 - email requerido e tem q ser do tipo email e não pode ser repetido (unique)
 - codigo_vigia OU codpes é requerido. Mas ambos não podem ser preenchidos simultaneamente
 - codigo_vigia não pode ser repetido
 - codpes não pode ser repetido

5. Implementação do users/form.blade.php só com os campos:
FALTA: corrigir no ocorrencias/form.blade.php
- old('parametro 1','parametro 2'):
 - parametro 1: Valor da sessão - Não passou na validação
 - parametro 2: Valor default

6. Implementação do create: UserController.php, users/create.blade.php
- incluir arquivos de flash para mostrar aquelas mensagens de error, etc
- implementar os métodos create e store no UserController.php

7. Implementação do edit: UserController.php,  users/edit.blade.php
- incluir arquivos de flash para mostrar aquelas mensagens de error, etc
- implementar os métodos edit e update no UserController.php

8. Implementação do show:  UserController.php, users/show.blade.php

9. Implementação do delete: UserController.php
- podemos colocar o botão de delete no users/index.blade.php
