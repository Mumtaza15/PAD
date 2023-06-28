<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class PasswordProtectedRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $password = $request->input('password');

        // Ganti 'password_rahasia' dengan password yang Anda inginkan
        if ($password === 'aa') {
            return $next($request);
        }

        return redirect('/loginAdmin')->with('error', 'Password salah!');
    }
}
