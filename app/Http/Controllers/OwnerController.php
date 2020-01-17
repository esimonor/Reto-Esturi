<?php

namespace App\Http\Controllers;
use App\Owner;
use Illuminate\Support\Facades\Auth;
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
        $id=Auth::user()->id;
        $sites = Owner::all()->where('owner','=',$id/*session('id')*/);

        return view('homeOwner',compact('sites'))/*->with('sites',$sites)*/;
    }

    public function addlocal(Request $request)
    {

        $name=$request->rutaactual;
        if($request->hasFile('file')){
            $file=$request->file('file');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);

            $db=new Owner;
            $db->name=$request->name;
            $db->type=$request->type;
            $db->longitud=$request->longitud;
            $db->latitud=$request->latitud;
            $db->rutaactual=$name;
            $db->apertura=$request->apertura;
            $db->cierre=$request->cierre;
            $db->owner=$request->ownerId;
            $db->description=$request->desc;
            $db->save();
        }
        if(!$request->hasfile('file')){
            $db=new Owner;
            $db->name=$request->name;
            $db->type=$request->desc;
            $db->longitud=$request->longitud;
            $db->latitud=$request->latitud;
            $db->rutaactual=$name;
            $db->apertura=$request->apertura;
            $db->cierre=$request->cierre;
            $db->owner=$request->ownerId;
            $db->description=$request->desc;
            $db->save();
        }
            return redirect('homeOwner');
    
        
        /*$name=$request->input("name");        
        $type=$request->input("type");
        $latitud=$request->input("latitud");
        $longitud=$request->input("longitud");
        $id=$request->input("ownerId");

        Owner::insert([
            ["name"=>$name,"type"=>$type, 'latitud'=>$latitud, 'longitud'=>$longitud,'owner'=>$id]
        ]);
        return redirect('homeOwner');*/
    }

    public function editlocal ($id){
        $sites=Owner::all()->where('id','=',$id);
        foreach ($sites as $site){
            $valor=$site;
        }
            return view('modsite',compact('valor'))/*->with('sites',$site)*/;

    }
    public function updatelocal(Request $request){
        //{"id":1,"name":"d1","type":"Discoteca","localization":"-","rutaactual":"museum.png","apertura":null,"cierre":null,"owner":6,"created_at":null,"updated_at":"2020-01-15
        $name=$request->rutaactual;
        if($request->formulario=='modificarsitio'){
        if($request->hasFile('file')){
            $file=$request->file('file');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);

            $db=Owner::find($request->idp);
            $db->name=$request->name;
            $db->type=$request->type;
            $db->longitud=$request->longitud;
            $db->latitud=$request->latitud;
            $db->rutaactual=$name;
            $db->apertura=$request->apertura;
            $db->cierre=$request->cierre;
            $db->owner=$request->ownerId;
            $db->description=$request->desc;
            $db->update();
        }
        if(!$request->hasfile('file')){
            $db=Owner::find($request->idp);
            $db->name=$request->name;
            $db->type=$request->desc;
            $db->longitud=$request->longitud;
            $db->latitud=$request->latitud;
            $db->rutaactual=$name;
            $db->apertura=$request->apertura;
            $db->cierre=$request->cierre;
            $db->owner=$request->ownerId;
            $db->description=$request->desc;
            $db->update();
        }
            return redirect('homeOwner');
    }
        /*$name=$request->input("name");
        $type=$request->input("type");
        $latitud=$request->input("latitud");
        $longitud=$request->input("longitud");
        $id=$request->input("id");

        Owner::where('id',$id)
            ->update(['name'=>$name,'type'=>$type,'latitud'=>$latitud, 'longitud'=>$longitud]);
        
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
