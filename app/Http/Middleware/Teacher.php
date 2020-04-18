<?php

namespace App\Http\Middleware;
use App\Models\Regra;
use Illuminate\Support\Facades\Auth;

use Closure;

class Teacher
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
            $permissao=Regra::findOrFail(Auth::user()->id);
            if($permissao->nome=="Professor"){
                return $next($request);
            }
            else{
                return response(view('errors.403'));
            }

        }

    }
}
