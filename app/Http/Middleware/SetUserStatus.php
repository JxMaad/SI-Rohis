<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SetUserStatus
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user->status = 'Online';
            $user->save();

            $response = $next($request);

            // Set user status to offline when the request ends
            $user->status = 'Offline';
            $user->save();

            return $response;
        }

        return $next($request);
    }
}
