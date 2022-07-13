<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role == 'User') {
            return $next($request);
        }
        
        if (Auth::user()->role == 'Brand') {
            return redirect()->route('brand');
        }

        if (Auth::user()->role == 'Influencer') {
            return redirect()->route('influencer');
        }

        if (Auth::user()->role == 'Admin') {
            return redirect()->route('admin');
        }
    }
}
