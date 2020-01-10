<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /*
    Hace update del usuario y redirige a modprofile
    */
    public function update(Request $request)
{
    $name=$request->input('name');
    $lastname=$request->input('lastname');
    $email=$request->input('email');
    $id=$request->input('id');

    User::where('id', $id)
              ->update(['name' => $name, 'lastname'=>$lastname, 'email'=>$email]);

              return redirect("/profile");
}

    public function usuarioborrasupropiacuenta($id)  {   
        //Elimina el usuario de la base datos   
        User::where("id",$id)->delete();        
            return view('welcome'); 
        }   
    }
    




