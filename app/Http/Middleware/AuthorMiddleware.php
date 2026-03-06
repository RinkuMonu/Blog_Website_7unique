<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorMiddleware
{   
    public function handle(Request $request, Closure $next): Response
    {
        if(!auth()->check() || auth()->user()->role != 3){
            auth()->logout();
            return redirect('/author/login')->withErrors(['msg'=>'Access denied.']);
        }
        return $next($request);
    }
}
