<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class multipleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
          // Cek jika user login di guard 'web' atau 'administrator'
          if (!Auth::guard('web')->check() && !Auth::guard('administrator')->check()) {
            return redirect()->route('login'); // redirect ke login jika tidak login di keduanya
        }

        return $next($request);
    }
}
