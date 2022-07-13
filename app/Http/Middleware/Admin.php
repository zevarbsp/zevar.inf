<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 1) {
            return redirect()->route('superadmin');
        }

        if (Auth::user()->role == 5) {
            return redirect()->route('influencer');
        }

        if (Auth::user()->role == 4) {
            return redirect()->route('brand');
        }

        if (Auth::user()->role == 3) {
            return redirect()->route('user');
        }

        if (Auth::user()->role == 2) {
            return $next($request);
        }
    }

}
