<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        // Cek apakah pengguna sudah login dan memiliki peran yang sesuai
        if (Auth::check() && Auth::user()->role_id == $role) {
            return $next($request);
        }

        // Jika tidak sesuai, redirect atau berikan respons yang sesuai
        return redirect('/home')->with('error', 'Unauthorized');
    }
}
