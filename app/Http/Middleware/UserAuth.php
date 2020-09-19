<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Route;
use Request;
use App\Cart;

class UserAuth
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

        view()->share('eee', Cart::getTotalCount() );

        if( empty(Auth::user()) ){

            return redirect( url('/login') )->with('error','الرجاء تسجيل الدخول .. ');
        }
        return $next($request);
    }
}
