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
            /*return view('modsite',['id'=>$id,'name'=>$name,'type'=>$name,'localization'=>$localization,'ownerId'=>$ownerId]);*/
        }
    }
    public function updatelocal(Request $request){
        //{"id":1,"name":"d1","type":"Discoteca","localization":"-","rutaactual":"museum.png","apertura":null,"cierre":null,"owner":6,"created_at":null,"updated_at":"2020-01-15
        $name=$request->rutaactual;
    if($request->formulario=='modificarsitio'){
    if($request->hasFile('file')){
        $file=$request->file('file');
        $name=time().$file->getClientOriginalName();
        $file->move(public_path().'/images/',$name);

        $db=Owner::find($request->id);
        $db->name=$request->name;
        $db->type=$request->desc;
        $db->localization=$request->coordenadas;
        $db->rutaactual=$name;
        $db->apertura=$request->apertura;
        $db->cierre=$request->cierre;
        $db->update();
    }
    if(!$request->hasfile('file')){
        $db=Owner::find($request->id);
        $db->name=$request->name;
        $db->type=$request->desc;
        $db->localization=$request->coordenadas;
        $db->rutaactual=$name;
        $db->apertura=$request->apertura;
        $db->cierre=$request->cierre;
        $db->update();
    }
        return redirect('profile');
}
        /*$name=$request->input("name");
        $type=$request->input("type");
        $localization=$request->input("coordenadas");
        $id=$request->input("id");

        Owner::where('id',$id)
            ->update(['name'=>$name,'type'=>$type,'localization'=>$localization]);
        
        return redirect('homeOwner');*/
    }

    public function destroy($id){
        $sites = Owner::all()->where("id","=",$id);
        foreach ($sites as $site){
            Owner::where("id",$id)->delete();
            return redirect("homeOwner");
        }
    }


}
