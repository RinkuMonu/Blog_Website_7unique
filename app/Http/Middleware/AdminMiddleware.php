<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
   
    public function handle(Request $request, Closure $next)
    {
        
        if (!Auth::check() || Auth::user()->role != 1) {
            Auth::logout();
            return redirect('/admin/login')->withErrors(['msg' => 'Access denied.']);
        }
        // dd(Auth::chech() , Auth::user());

        return $next($request);

    }
}
