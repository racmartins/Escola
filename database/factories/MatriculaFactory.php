<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Aluno;
use App\Models\Matricula;


use Illuminate\Database\Eloquent\Factories\Factory;

class MatriculaFactory extends Factory
{
    protected $model = Matricula::class;

    public function definition()
    {
        return [
            'aluno_id' => Aluno::factory(),
            'curso_id' => Curso::factory(),
            'data_matricula' => $this->faker->date(),
            // Outros campos necessários
        ];
    }
}
