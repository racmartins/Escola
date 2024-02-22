<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function index()
    {
        $matriculas = Matricula::with(['aluno', 'curso'])->get();
        return view('matriculas.index', compact('matriculas'));
    }

    public function create()
    {
        $alunos = Aluno::all();
        $cursos = Curso::all();
        return view('matriculas.create', compact('alunos', 'cursos'));
    }

    public function store(Request $request)
    {
        Matricula::create($request->all());
        return redirect()->route('matriculas.index');
    }

    public function show($id)
    {
        $matricula = \App\Models\Matricula::findOrFail($id);
        return view('matriculas.show', compact('matricula'));
    }
    public function edit(Matricula $matricula)
    {
        $alunos = Aluno::all();
        $cursos = Curso::all();
        return view('matriculas.edit', compact('matricula', 'alunos', 'cursos'));
    }
    public function update(Request $request, Matricula $matricula)
    {
        $matricula->update($request->all());
        return redirect()->route('matriculas.index');
    }
    public function destroy(Matricula $matricula)
    {
        $matricula->delete();
        return redirect()->route('matriculas.index');
    }
}
