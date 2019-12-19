<?php

namespace App\Http\Controllers;
use App\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function redirect(){
        return view("homeOwner");
    }

    public function addlocal(Request $request)
    {
        $id=$request->input("ownerId");
        $name=$request->input("name");
        $type=$request->input("type");
        //$localization=$request->input("coordenadas");"localization"=>$localization,

        Owner::insert([
            ["name"=>$name,"type"=>$type]
        ]);
    }
}
