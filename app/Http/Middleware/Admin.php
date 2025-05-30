<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (auth()->user()->role == 'admin') {
        //     return $next($request);
        // }

        if (auth()->user()) {
            if (auth()->user()->role == 'admin') {
                return $next($request);
            }
            return redirect()->route('notes');
        }
        return redirect()->route('notes');
    }
}
