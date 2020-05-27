<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Authadmin
{
    public function handle($request, Closure $next,$guard = null)
    {
        if (false == Auth::guard('admin')->check()) {
            return redirect()->route('adminlogin');
        }
        return $next($request);
    }
}
