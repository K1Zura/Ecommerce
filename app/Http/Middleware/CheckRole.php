<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        // Check if the user is logged in and has the specified role
        if (Auth::check() && Auth::user()->role_id == $role) {
            return $next($request);
        }

        // If not, redirect or provide an appropriate response
        return redirect('/home')->with('error', 'Unauthorized');
    }
}
