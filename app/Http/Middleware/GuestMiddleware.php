<?php

namespace App\Http\Middleware;

use Closure;

class GuestMiddleware
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
        dd($request->user()->role);
        if(!$request->user()->role == 'guest'){
            return view('admin.products.unauthorized');
        }
        dd($request);
        return $next($request);
    }
}
