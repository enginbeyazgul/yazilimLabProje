<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class YazOkuluControl
{
    public function handle(Request $request, Closure $next)
    {
        if (isset($request->danismanadsoyad) && isset($request->universite) && isset($request->baslangic) && isset($request->danismanadsoyad) && isset($request->bitis) && isset($request->fakultebolum) && isset($request->dersadi) && isset($request->t) && isset($request->u) && isset($request->l) && isset($request->akts)){
            return $next($request);
        }
        else{
            return redirect()->back()->withErrors(['msg' => 'Lütfen Tüm Alanları Doldurun!']);
        }
    }
}
