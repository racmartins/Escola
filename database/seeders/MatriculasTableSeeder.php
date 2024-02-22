<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Matricula;

class MatriculasTableSeeder extends Seeder
{
    public function run()
    {
        Matricula::factory()->count(400)->create();
    }
}

