<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
        echo 'In GuestMiddleware';
        var_dump(Auth::user('role'));
        if(Auth::user('role') != 'admin'){
            return view('admin.products.unauthorized')->render();
        }
        return view('admin.products.create');
    }
}
