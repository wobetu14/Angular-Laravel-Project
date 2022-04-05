<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use Session;

class BuyerMiddleware
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
        /**
         * 1. Check user is authenticated
         * 2. Check user is has customer-support privilege.
         */
        if (Sentinel::check() && (Sentinel::getUser()->roles()->first()->slug=="buyer")) {
            return $next($request);
        }
        else
        {
            Session::flash("error","Sorry! Either you are not authenticated or authorized to access.");
            return redirect('/');
        }
    }
}
