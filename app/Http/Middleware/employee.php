<?php

namespace App\Http\Middleware;

use Closure;

class employee
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
        if($request->session()->get("employee_email")===null){
            return redirect("/employee");
        }
        return $next($request);
    }
}
