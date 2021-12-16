<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class YatayGecisControl
{
    public function handle(Request $request, Closure $next)
    {
        if (isset($request->basvuruturu) && isset($request->ogretimturu) && isset($request->yariyil) && isset($request->disiplindurumu) && isset($request->gno) && isset($request->yil) && isset($request->puan) && isset($request->puanturu) && isset($request->yabancidil) && isset($request->basvuruf) && isset($request->basvurub) && isset($request->ogretimturub) && isset($request->puanb) && isset($request->puanturub)){
            return $next($request);
        }
        else{
            return redirect()->back()->withErrors(['msg' => 'Lütfen Tüm Alanları Doldurun!']);
        }
    }
}
