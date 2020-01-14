<?php

namespace App\Http\Controllers;
use App\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function __construct(){
		$this->middleware('role:owner');
	}
    public function index(){
        return redirect("homeOwner");
    }
    public function redirect(){
        return view("homeOwner");
    }

    public function show(){
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

    public function editlocal ($id){
        $sites=Owner::all()->where('id','=',$id);
        foreach ($sites as $site){
            return view('modsite')->with('sites',$site);
        }
    }
    public function updatelocal(Request $request){
        $name=$request->input("name");
        $type=$request->input("type");
        $localization=$request->input("coordenadas");
        $id=$request->input("id");

        Owner::where('id',$id)
            ->update(['name'=>$name,'type'=>$type,'localization'=>$localization]);
        
        return redirect('homeOwner');
    }

    public function destroy($id){
        $sites = Owner::all()->where("id","=",$id);
        foreach ($sites as $site){
            Owner::where("id",$id)->delete();
            return redirect("homeOwner");
        }
    }


}
