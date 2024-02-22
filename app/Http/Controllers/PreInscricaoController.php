<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\PreInscricao;
use Illuminate\Http\Request;

class PreInscricaoController extends Controller
{
    public function index()
    {
        $preInscricoes = \App\Models\PreInscricao::all();
        return view('pre-inscricao.index', compact('preInscricoes'));
    }
    public function create()
    {
        $cursos = Curso::all();
        return view('pre-inscricao.create', compact('cursos'));
    }

    public function store(Request $request)
    {
        PreInscricao::create($request->all());
        return redirect()->route('pre-inscricao.create')->with('success', 'Pré-inscrição realizada com sucesso!');
    }
    public function show($id)
    {
        $preInscricao = PreInscricao::findOrFail($id);
        return view('pre-inscricao.show', compact('preInscricao'));
    }

    public function edit($id)
    {
        $preInscricao = PreInscricao::findOrFail($id);
        $cursos = Curso::all(); // Assumindo que tem um modelo Curso e quer listar todos na view de edição
        return view('pre-inscricao.edit', compact('preInscricao', 'cursos'));
    }

    public function destroy($id)
    {
        $preInscricao = PreInscricao::findOrFail($id);
        $preInscricao->delete();
        return redirect()->route('pre-inscricao.index')->with('success', 'Pré-inscrição excluída com sucesso.');
    }

}
