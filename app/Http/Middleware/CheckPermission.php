<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  \Optional  $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $permission = null)
    {
        If(!App('Illuminate\Contracts\Auth\Guard')->guest()){

            If($request->user()->can_access($permission)){
                return $next($request);
            }else{
                return response('Unauthorized.', 401);
            }
        }
        //return redirect()->route('dashboard');
        //return $request->ajax ? response('Unauthorized.', 401) : redirect('dashboard');
    }
}
