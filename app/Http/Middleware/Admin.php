<?php

namespace App\Http\Middleware;

use App\Models\Regra;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()){
             $regra=Regra::findOrFail(Auth::user()->id);
                if($regra->nome=="Admin")
                       return $next($request);

           return response(view('errors.403'));

    }


}
}
