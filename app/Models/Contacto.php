<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contacts'; // Definindo a tabela correcta

    protected $fillable = ['nome', 'email', 'mensagem'];
}
