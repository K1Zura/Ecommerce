<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckMultipleRoles
{
    public function handle($request, Closure $next, ...$roles)
    {
        // Check if the user is logged in
        if (Auth::check()) {
            // Check if the user has any of the specified roles
            foreach ($roles as $role) {
                if (Auth::user()->role_id == $role) {
                    return $next($request);
                }
            }
        }

        // Redirect or handle unauthorized access
        abort(403, 'Unauthorized action.');
    }
}
