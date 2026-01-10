<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Se o usuário não estiver logado, manda para o login
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();

        // Se o usuário for 'admin', ele SEMPRE passa, não importa a rota
        if ($user->role === 'admin') {
            return $next($request);
        }

        // Se a rota exige 'lider' e o usuário logado é 'lider', ele passa
        if (in_array($user->role, $roles)) {
            return $next($request);
        }

        // Se não for nenhum dos dois, aborta com erro 403 (Acesso Restrito)
        abort(403, 'Acesso não autorizado.');
    }
}
