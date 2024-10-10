<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::id() == null) {
            return redirect()->route('auth.admin')->with('error', 'You need  login first.');
        }
        return $next($request);
    }

    public function return(Request $request, Closure $next): Response
    {
        if (Auth::id() > 0) {
            return redirect()->route('dashboard.index');
        }
        return $next($request);
    }
}