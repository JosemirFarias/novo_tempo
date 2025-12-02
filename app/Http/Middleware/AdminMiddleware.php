<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user(); // <-- Intelephense entende!

        // Se não estiver logado ou não for admin
        if (!$user || $user->role !== 'admin') {
            abort(403, 'Acesso negado.');
        }

        return $next($request);
    }
}
