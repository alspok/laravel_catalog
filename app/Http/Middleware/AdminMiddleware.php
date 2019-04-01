<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        echo 'In AdminMiddleware';
        if($request->user() && $request->user()->role != 'admin'){
            return view('admin.products.unauthorized');
        }
        return $next($request);
    }
}
