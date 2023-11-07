<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Check if the user is authenticated and has the required role
        if (auth()->check() && auth()->akuns()->role === $role) {
            return $next($request);
        }

        // If the user doesn't have the required role, you can redirect them or return a response.
        return redirect('/'); // Redirect to the home page or any other route.
    }
}
