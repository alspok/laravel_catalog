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
        // var_dump($request->user());
        // if($request->user() && $request->user()->role == 'admin'){
        //     return view('admin.products.create');
        if($request->user() && $request->user()->role == 'admin'){
            return view('admin.products.create');
        }
        // }
        return $next($request);
    }
}
