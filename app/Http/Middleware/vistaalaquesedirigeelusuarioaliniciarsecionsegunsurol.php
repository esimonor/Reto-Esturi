<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\UserController;

class vistaalaquesedirigeelusuarioaliniciarsecionsegunsurol
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
        $a=Auth::user();//guardo en a los valores del usuario para no estar escribiendo lo mismo varias veces
        

        if ($a->administrador()) {
            
            //si el roll del usuario es administrador se redirige a la vista de administradores
            //return redirect('vistadelusuarioadministrador');
            return redirect('admvis');
            
        }
        if($a->userr()){
            //hay que poner en la base de datos un campo que se llame primerlogin y este en true
            if(Auth::user()->primerlogin=="true"){
                //desprues de que el usuario envie el formulario de estandariniciosecionprimeraves el valor del campo primer login cambiara a false asi que no entrara mas a este formulario cuando vuelva a iniciar sesion solo entrara si el quiere
                return redirect("usrvis");
            }else{
                return $next($request);
            }
        }
        if ($a->owner() && $ow==0) {
            $ow=1;
            //si el usuario es propietario se redirige a la vista de propietario
            return redirect("ownvis");
        }

       
    }
}
