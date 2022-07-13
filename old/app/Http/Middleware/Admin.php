<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class Admin
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
        
        if (Auth::user()->role == 'Admin') {
            return $next($request);
        }
        
        if (Auth::user()->role == 'Brand') {
            return redirect()->route('brand');
        }

        if (Auth::user()->role == 'User') {
            return redirect()->route('user');
        }

        if (Auth::user()->role == 'Influencer') {
            return redirect()->route('influencer');
        }

    }
}
