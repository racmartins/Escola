<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreInscricao extends Model
{
    protected $table = 'pre_inscricao';

    protected $fillable = ['nome', 'email', 'curso_id', 'mensagem'];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
