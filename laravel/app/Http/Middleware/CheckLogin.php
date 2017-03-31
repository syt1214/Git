<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //判断是否有session
        if (!$request->session()->get('user_id')) {
            //返回登录页面
            return redirect('user/gologin');
        }
        return $next($request);
    }
}