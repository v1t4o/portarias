<?php

use Illuminate\Database\Seeder;
use App\Ocorrencia;

class OcorrenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ocorrencia1 = [
            'patrimonio' => '52121',
            'tipo' => 'saida',
            'comentario' => 'Saida de equipamento para home office 1',
            'user_id' => '1',
            'data_ocorrencia' => '2020-06-18 18:25:30',

        ];

        $ocorrencia2 = [
            'numero_serie' => 'Xa5521321ss',
            'tipo' => 'saida',
            'comentario' => 'Saida de equipamento para home office 2',
            'user_id' => '2',
            'data_ocorrencia' => '2020-06-18 18:25:30',

        ];

        Ocorrencia::create($ocorrencia1);

        Ocorrencia::create($ocorrencia2);

        factory(Ocorrencia::class, 100)->create();
    }
}
