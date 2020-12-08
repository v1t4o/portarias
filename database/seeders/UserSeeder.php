<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Thiago',
            'email' => 'thiagoa@usp.br',
            'codpes' => '5385361',
        ];

        User::create($vigia);

        User::create($pessoausp);

        User::factory(100)->create();
    }

}

