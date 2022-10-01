<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionValidation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Session::has('user')){
            $type = Session::get('user')["tipo_cuenta"];
            $path = $_SERVER["PATH_INFO"];
            $flag = false;
            if ($type == "admin") {
                switch ($path) {
                    case '/admin':
                        $flag = true;
                        break;
                    case '/perfiles':
                        $flag = true;
                        break;
                    case '/contactos':
                        $flag = true;
                        break;
                    case '/requerimientos':
                        $flag = true;
                        break;
                    case '/postulantes':
                        $flag = true;
                        break;
                    case '/cuentas':
                        $flag = true;
                        break;
                    case '/allperfiles':
                        $flag = true;
                        break;
                }
            }
            if($type == "cliente"){
                switch ($path) {
                    case '/cliente':
                        $flag = true;
                        break;
                }
            }
            if($flag){
                return $next($request);
            }
        }
        return redirect('/');
    }
}
