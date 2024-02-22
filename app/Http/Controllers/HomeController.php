<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function oferta()
    {
        $cursos = Curso::all();
        return view('oferta', compact('cursos'));
    }
}
