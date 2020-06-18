<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Criando um usuario vigia
        $vigia = [
            'name' => 'João da Silva',
            'email' => 'joaosilva@usp.br',
            'codigo_vigia' => '5555',
            'password' => bcrypt('superman'),

        ];

        $pessoausp = [
            'name' => 'Ana',
            'email' => 'thiagoa@usp.br',
            'codpes' => '5385361',

        ];

        User::create($vigia);

        User::create($pessoausp);

        factory(User::class, 100)->create();
    }

}

