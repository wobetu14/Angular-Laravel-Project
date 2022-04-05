<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use Session;

class CustomersupportMiddleware
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
        if (Sentinel::check() && (Sentinel::getUser()->roles()->first()->slug=="customer_support")) {
            return $next($request);
         }
        else
        {
            Session::flash("error","Sorry! Either you are not authenticated or authorized to access.");
            return redirect('/');
        }
    }
}
