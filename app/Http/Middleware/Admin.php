<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        if (auth()->user()->privilege_id == 3) {
            return $next($request);
        }
        return redirect('/central_dashboard')->with('error', 'You are not allowed to view this page!');
    }
}
