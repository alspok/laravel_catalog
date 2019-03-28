<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

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
        var_dump(Auth::user()->role);
        if(Auth::user() == 'guest'){
            return view('admin.products.item_view');
        }
        return $next($request);
    }
}
