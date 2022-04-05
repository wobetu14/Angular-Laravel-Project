<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use Session;

class VisitorsMiddleware
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

            return $next($request);


            /*if (Sentinel::getUser()->roles()->first()->slug=='admin')
            {
                return redirect('admin-dashboard');
            }
            elseif (Sentinel::getUser()->roles()->first()->slug=='seller')
            {
                return redirect('seller-dashboard');
            }

            elseif (Sentinel::getUser()->roles()->first()->slug=='buyer')
            {
                return redirect('buyer-dashboard');
            }
            elseif (Sentinel::getUser()->roles()->first()->slug=='customer_support')
            {
                return redirect('customer-support-dashboard');
            }*/

    }
}
