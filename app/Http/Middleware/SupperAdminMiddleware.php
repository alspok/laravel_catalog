<?php

namespace App\Http\Middleware;

use Closure;

class SupperAdminMiddleware
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
        echo 'In SuperAdminMiddleware';
        if ($request->user() && $request->user()->type != ‘superadmin’){
            return new Response(view(‘unauthorized’)->with(‘role’, ‘superadmin’));
        }
        return $next($request);
    }
}
