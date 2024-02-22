<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Curso;

class CursosTableSeeder extends Seeder
{
    public function run()
    {
        Curso::factory()->count(10)->create();
    }
}

