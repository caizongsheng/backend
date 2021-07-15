<?php

namespace App\Http\Middleware;

use Closure;

class LoginValidate
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
        $uesrname = $request->session()->get('username');
        if(!$uesrname){
            return redirect()->action('admin\LoginController@login');
        }
        return $next($request);
    }
}
