<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $users = User::all();        
        return view('listUsers')->with('users',$users);
    }

    public function destroy($id)  {   
        //Elimina el usuario de la base datos   
        $users = User::all()->where("id","=",$id);    
        foreach ($users as $user) {    
            User::where("id",$id)->delete();    
            return redirect("/listUsers");  
        }   
    }
}
