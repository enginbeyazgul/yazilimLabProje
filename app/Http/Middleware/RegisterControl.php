<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RegisterControl
{
    public function handle(Request $request, Closure $next)
    {
        if (isset($request->resim) && isset($request->dogumtarihi) && isset($request->ad) && isset($request->soyad) && isset($request->okulno) && isset($request->telno) && isset($request->tc) && isset($request->mail) && isset($request->adres) && isset($request->sınıf) && isset($request->fakulte) && isset($request->bolum) && isset($request->sifre)) {
            return $next($request);
        }
        else{
            return redirect()->back()->withErrors(['msg' => 'Lütfen Tüm Alanları Doldurun!']);
        }
    }
}
