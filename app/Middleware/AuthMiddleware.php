<?php

namespace App\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Exceptions\ApiException;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            throw new ApiException(401, 'unauthorized', 'Unauthorized access.');
        }

        return $next($request);
    }
}
