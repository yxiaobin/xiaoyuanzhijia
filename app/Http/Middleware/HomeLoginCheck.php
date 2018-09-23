<?php

namespace App\Http\Middleware;

use App\Member;
use Closure;

class HomeLoginCheck
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
        if (session('id')){
            return $next($request);
        }
        else
            return redirect('login');
    }
}
