<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $fillable = ['aluno_id', 'curso_id','data_matricula'];

    protected $dates = ['data_matricula']; // Adiciona data_matricula ao array de datas para tratá-lo como uma instância Carbon

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
