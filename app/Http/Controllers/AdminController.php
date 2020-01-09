<?php

namespace App\Http\Controllers;
use App\User;
use App\Owner;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexUsers(){
        $users = User::all();        
        return view('listUsers')->with('users',$users);
    }

    public function destroyUsers($id)  {   
        //Elimina el usuario de la base datos   
        $users = User::all()->where("id","=",$id);    
        foreach ($users as $user) {    
            User::where("id",$id)->delete();    
            return redirect()->back();
        }   
    }

    public function indexEstablishments(){
        $establishments = Owner::all();        
        return view('listEstablishments')->with('establishments',$establishments);
    }

    public function destroyEstablishments($id)  {   
        //Elimina el establecimiento de la base datos   
        $establishments = Owner::all()->where("id","=",$id);    
        foreach ($establishments as $establishment) {    
            Owner::where("id",$id)->delete();    
            return redirect("/listEstablishments");  
        }
    }

    public function eliminarusuario($id)  {   
        //Elimina el usuario de la base datos   
        $users = User::all()->where("id","=",$id);    
        foreach ($users as $user) {    
            User::where("id",$id)->delete();    
            return redirect()->back();
        }   
    }
}
