<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EvaluacionEgresados;

class EvaluacionEgresadosFactory extends Factory
{
    protected $model = EvaluacionEgresados::class;
    public function definition(): array
    {
        return [
            'empresa_id' => $this->faker->numberBetween(1,60),
            'formato_tipo_evaluacion_id' => $this->faker->numberBetween(1,60),
        ];
    }
}
