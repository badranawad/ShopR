<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Route;
use Request;
use App\Cart;
use App\Setting;

class ProjectGlobal
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

        view()->share('setting', Setting::first() );

        return $next($request);

    }
}
