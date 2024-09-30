<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->role !== $role) {
            // If the user is not authenticated or their role doesn't match
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
