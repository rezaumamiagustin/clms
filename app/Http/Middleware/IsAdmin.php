<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // awalnya public function handle(Request $request, Closure $next)
    // {
    //    if(auth()->user()->is_admin == 1){
    public function handle(Request $request, Closure $next, ...$levels)
    {
        if(in_array($request->user()->is_admin,$levels)){
            return $next($request);
        }
        return redirect('home')->with('error', "Anda Tidak Dapat Mengakses Halaman Ini!!");
        // return $next($request);
    }
}
