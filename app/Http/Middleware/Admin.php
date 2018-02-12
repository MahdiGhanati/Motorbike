<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle($request, Closure $next, $guard = null)
    {
        if(auth()->check() && auth()->user()->isAdmin()){
            // دسترسی به یو آر ال درخواست شده
            return $next($request);
        }

        return redirect('/welcome/logout');
    }

}