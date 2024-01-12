<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        if (Auth::user()->email == "admin" &&  Auth::user()->password == "$2y$12$8Uh2huz1MxIMa0dMC32z4uTcE.SeK.NzfygzWYOg.EtmeBpsmT.XW") {
            return $next($request);
        }
        abort(401);
    }
}
