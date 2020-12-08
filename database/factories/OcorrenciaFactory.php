<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ocorrencia;
use App\Models\User;

class OcorrenciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ocorrencia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ocorrencia = new Ocorrencia;
        $tipos = $ocorrencia->tipos();

        return [
            'patrimonio' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'tipo' => $tipos[array_rand($tipos)],  
            'comentario' => $this->faker->sentence,
            'user_id' => User::factory()->create()->id,
            'data_ocorrencia' => $this->faker->dateTime, 
        ];
    }
}



