<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Firebase
{
    public function handle(Request $request, Closure $next)
    {
        if(Session::has('student'))
            return $next($request);
        else
            return redirect()->back();
    }
}
