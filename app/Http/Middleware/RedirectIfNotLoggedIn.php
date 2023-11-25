<?php

// File: app/Http/Middleware/RedirectIfNotLoggedIn.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotLoggedIn
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('user')->check()) {
            return redirect('/login-user'); // Ganti '/login' dengan URL login yang sesuai
        }

        return $next($request);
    }
}

