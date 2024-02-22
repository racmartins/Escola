<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) return redirect('login');

        $user = Auth::user();
        foreach($roles as $role) {
            // Verifica se o utilizador possui algum dos roles permitidos
            if($user->role == $role) return $next($request);
        }

        // Redireciona se o usuário não tem acesso
        return redirect('home')->with('error','Você não tem permissão para acessar essa página.');
    }
}
