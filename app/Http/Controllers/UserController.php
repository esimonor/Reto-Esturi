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
    $name='profile.png';
    if($request->hasFile('file')){
        $file=$request->file('file');
        $name=time().$file->getClientOriginalName();
        $file->move(public_path().'/images/',$name);
    }
    $db=User::find($request->id);
    $db->name=$request->name;
    $db->lastName=$request->lastname;
    $db->email=$request->email;
    $db->ruta=$name;
    $db->save();

              return view('profile');
}

    public function usuarioborrasupropiacuenta($id)  {   
        //Elimina el usuario de la base datos   
        User::where("id",$id)->delete();        
            return view('welcome'); 
        }   
    }
    




