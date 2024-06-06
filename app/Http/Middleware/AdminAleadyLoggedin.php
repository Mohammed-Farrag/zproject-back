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
        // dd($request->url());
        if( Session()->has('adminId') && ( url('admin/login') == $request->url() ||  url('admin/register') == $request->url())){
            
            return redirect('/admin');
        }
        return $next($request);
    }
}
