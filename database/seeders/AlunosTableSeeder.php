<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Aluno;

class AlunosTableSeeder extends Seeder
{
    public function run()
    {
        Aluno::factory()->count(400)->create();
    }
}

