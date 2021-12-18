<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminControl
{
    public function handle(Request $request, Closure $next)
    {
        if (Session::get('adminId')){
            return $next($request);
        }
    }
}
