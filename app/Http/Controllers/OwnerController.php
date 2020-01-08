<?php

namespace App\Http\Controllers;
use App\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function redirect(){
        return view("homeOwner");
    }

    public function index(){
        $sites = Owner::all()->where('owner','=',session('id'));

        return view('homeOwner')->with('sites',$sites);
    }

    public function addlocal(Request $request)
    {
        
        $name=$request->input("name");
        $type=$request->input("type");
        $localization=$request->input("coordenadas");
        $id=$request->input("ownerId");

        Owner::insert([
            ["name"=>$name,"type"=>$type, 'localization'=>$localization,'owner'=>$id]
        ]);
        return redirect('homeOwner');
    }
}
