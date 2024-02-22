<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProfileController,
    HomeController,
    CursoController,
    PreInscricaoController,
    AlunoController,
    MatriculaController,
    UtilizadorController,
    ContactoController,
    AdminController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Página inicial
Route::get('/', [HomeController::class, 'index'])->name('home');

// Divulgação de Cursos
Route::get('/oferta', [HomeController::class, 'oferta'])->name('oferta');



// Autenticação e perfil do utilizador
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Definição de rotas para pré-inscrição
Route::resource('pre-inscricao', PreInscricaoController::class);



// Rotas resource
Route::resource('alunos', AlunoController::class);
Route::resource('cursos', CursoController::class);
Route::resource('matriculas', MatriculaController::class);

// Contactos
Route::get('/contactos', [ContactoController::class, 'index'])->name('contactos.index');
Route::get('/contactos/create', [ContactoController::class, 'create'])->name('contactos.create');
Route::post('/contactos', [ContactoController::class, 'store'])->name('contactos.store');
Route::delete('/contactos/{contacto}', 'ContactoController@destroy')->name('contactos.destroy');


// Inclui as rotas de autenticação
require __DIR__.'/auth.php';
