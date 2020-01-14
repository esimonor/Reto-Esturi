<?php

namespace App\Http\Controllers;
use App\Contacto;
use Illuminate\Http\Request;

class contactoController extends Controller
{
    public function contactar(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $comentario=$request->input('comentario');

        Contacto::insert([
            ['name'=>$name,'email'=>$email,'comentario'=>$comentario]
        ]);
        return view('welcome');
    }
}
