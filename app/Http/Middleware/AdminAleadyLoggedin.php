<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAleadyLoggedin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if( Session()->has('adminId') && ( url('dashboard/login') == $request->url() ||  url('dashboard/register') == $request->url())){
            
            return redirect('/dashboard');
        }
        return $next($request);
    }
}
