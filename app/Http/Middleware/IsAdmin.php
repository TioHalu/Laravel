<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     //php artisan make:middleware IsAdmin
    public function handle(Request $request, Closure $next)
    {
        //jika tidak ada data role atau data role tersebut bukan admin maka akan rediret home 
        $user = Auth::user();//mendapatkan data user nama email dan data role
        if (!$user->role || $user->role != 'admin')
        {
            return redirect('/');
        }
        //jika memenuhi syarat
        return $next($request);
    }
}
