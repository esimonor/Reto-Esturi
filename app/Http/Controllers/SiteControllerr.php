<?php

namespace App\Http\Controllers;
use App\Owner;
use App\Establishment;
use App\establishment_user;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function showSites(){
        $sites = Owner::all();
        return view('home')->with('sites',$sites);
    }
    public function localactual($id){
        $site=Establishment::where('id','=',$id)->get();

            return view('lugaractual',compact('site'))/*->with('site',$site)*/;
            /*return view('modsite',['id'=>$id,'name'=>$name,'type'=>$name,'localization'=>$localization,'ownerId'=>$ownerId]);*/    
    }
    public function introducioncomentario(Request $request){

    }
}
