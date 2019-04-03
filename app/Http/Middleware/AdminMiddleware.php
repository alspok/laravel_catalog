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
        $path = $request->path();

        switch($path){
            case 'admin/products/create':
                if(Auth::check() && Auth::user()->role == 'admin'){
                    // return redirect()->route('products.create');
                    return response()->view('admin/products/create');
                }
                break;
            case 'admin/products/index':
                if(Auth::check() && Auth::user()->role == 'guest'){
                    return redirect()->route('products.guest_index');
            }
                if(Auth::check() && Auth::user()->role == 'admin'){
                    return redirect()->route('products.admin_index');
                }
                
                break;
            default:
                return redirect('/home');
        }
        
        // if($request->path() == 'admin/products/create' && Auth::check() && Auth::user()->role == 'admin'){
        //     return response()->view('admin/products/create');
        // }
        // else{
        //     return redirect('/home');
        // }
        // return $next($request);
        
        // var_dump($request->path());
        // var_dump(Auth::check());
        // var_dump(Auth::user()->role);
        // // die();
        // if($request->path() == 'admin/products/index' && Auth::check() && Auth::user()->role == 'admin'){
        //     return redirect()->route('products.admin_index');
        //     // return response()->view('admin/products/table_view_admin');
        // }
        // else{
        //     return redirect()->route('products.user_index');
        //     // return response()->view('admin/products/table_view_user');
        // }
    }
}
