<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LeaderMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user(); // Intelephense reconhece

        // Se não estiver logado ou não for líder e nem admin
        if (!$user || !in_array($user->role, ['leader', 'admin'])) {
            abort(403, 'Acesso negado.');
        }

        return $next($request);
    }
}
