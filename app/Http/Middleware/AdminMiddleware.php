<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

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
<<<<<<< HEAD
        echo 'In AdminMiddleware';
        if($request->user() && $request->user()->role != 'admin'){
            return view('admin.products.unauthorized');
=======
        // var_dump($request);
        if($request->requestUri == '/admin/products/create' && Auth::check() && Auth::user()->role == 'admin'){

            return response()->view('admin/products/create');
        }
        else{
            return redirect('/home');
>>>>>>> b558ee38207c9b6904348c68400f91f38bf3ddef
        }
        // return $next($request);
    }
}
