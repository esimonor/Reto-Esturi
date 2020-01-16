<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\categoria_user;

use Illuminate\Support\Facades\Auth;

use App\User;

class ControladordeGustos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function modcategorias(){
        $id=Auth::user()->id;
        $gusto=User::where('id',$id)->get();
        foreach ($gusto as $key) {
            $gustos=$key->categorias;
        }
            $cc=0;
            $fiest=0;
            $gym=0;
            $cine=0;
            $monumentos=0;
            $bares=0;
            $restaurantes=0;
            $museos=0;
        foreach ($gustos as $k => $v) {

            if($v->nombre=='centro comerciales'){
                $cc=1;
            }
            if($v->nombre=='fiestas'){
                $fiest=1;
            }
            if($v->nombre=='gimnasios'){
                $gym=1;
            }
            if($v->nombre=='cines'){
                $cine=1;
            }
            if($v->nombre=='monumentos'){
                $monumentos=1;
            }
            if($v->nombre=='bares'){
                $bares=1;
            }
            if($v->nombre=='restaurantes'){
                $restaurantes=1;
            }
            if($v->nombre=='museos'){
                $museos=1;
            }
        }
        return view('modificarcategorias',compact('cc','fiest','gym','cine','monumentos','bares','restaurantes','museos'));
    }
    public function create()
    {
        $id=Auth::user()->id;
        $gusto=User::where('id',$id)->get();
        foreach ($gusto as $key) {
            $gustos=$key->categorias;
        }
            $cc=0;
            $fiest=0;
            $gym=0;
            $cine=0;
            $monumentos=0;
            $bares=0;
            $restaurantes=0;
            $museos=0;
        foreach ($gustos as $k => $v) {

            if($v->nombre=='centro comerciales'){
                $cc=1;
            }
            if($v->nombre=='fiestas'){
                $fiest=1;
            }
            if($v->nombre=='gimnasios'){
                $gym=1;
            }
            if($v->nombre=='cines'){
                $cine=1;
            }
            if($v->nombre=='monumentos'){
                $monumentos=1;
            }
            if($v->nombre=='bares'){
                $bares=1;
            }
            if($v->nombre=='restaurantes'){
                $restaurantes=1;
            }
            if($v->nombre=='museos'){
                $museos=1;
            }
        }
        return view('gustosdelusuarioestandar/gustoscreate',compact('cc','fiest','gym','cine','monumentos','bares','restaurantes','museos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id=Auth::user()->id;
        /*
        el id de fiestas es 1
        el id de centro comerciales es 2
        el id de gimasios es 3 
        el id de cines es 4
        el id de monumentos es 5
        el id de bares es 6
        el id de restaurantes es 7
        el id de museos es 8
        */
        $cfiestas=categoria_user::where('user_id',$id)->where('categoria_id',1)->first();
        $cmonumento=categoria_user::where('user_id',$id)->where('categoria_id',5)->first();
        $ccc=categoria_user::where('user_id',$id)->where('categoria_id',2)->first();
        $cgimnasio=categoria_user::where('user_id',$id)->where('categoria_id',3)->first();
        $ccine=categoria_user::where('user_id',$id)->where('categoria_id',4)->first();
        $cbar=categoria_user::where('user_id',$id)->where('categoria_id',6)->first();
        $crestaurante=categoria_user::where('user_id',$id)->where('categoria_id',7)->first();
        $cmuseo=categoria_user::where('user_id',$id)->where('categoria_id',8)->first();
        if ($request->formulario=='uno') {
            if($request->fiesta && !$cfiestas){
                $gusto=new categoria_user;
                $gusto->categoria_id=$request->idfiesta;
                $gusto->user_id=$id;
                $gusto->save();
            }
                if($cfiestas && !$request->fiesta){
                    $gusto=categoria_user::find($cfiestas->id);
                    $gusto->delete();
                }
            if($request->monumento && !$cmonumento){
                $gusto=new categoria_user;
                $gusto->categoria_id=$request->idmonumento;
                $gusto->user_id=$id;
                $gusto->save();
            }
                if($cmonumento && !$request->monumento){
                    $gusto=categoria_user::find($cmonumento->id);
                    $gusto->delete();
                }
            if($request->centrocomercial && !$ccc){
                $gusto=new categoria_user;
                $gusto->categoria_id=$request->idcentrocomercial;
                $gusto->user_id=$id;
                $gusto->save();
            }
                if($ccc && !$request->centrocomercial){
                    $gusto=categoria_user::find($ccc->id);
                    $gusto->delete();
                }
            if($request->gimnasio && !$cgimnasio){
                $gusto=new categoria_user;
                $gusto->categoria_id=$request->idgimnasio;
                $gusto->user_id=$id;
                $gusto->save();
            }
                if($cgimnasio && !$request->gimnasio){
                    $gusto=categoria_user::find($cgimnasio->id);
                    $gusto->delete();
                }
            if($request->cine && !$ccine){
                $gusto=new categoria_user;
                $gusto->categoria_id=$request->idcine;
                $gusto->user_id=$id;
                $gusto->save();
            }
                if($ccine && !$request->cine){
                    $gusto=categoria_user::find($ccine->id);
                    $gusto->delete();
                }
            if($request->bar && !$cbar){
                $gusto=new categoria_user;
                $gusto->categoria_id=$request->idbar;
                $gusto->user_id=$id;
                $gusto->save();
            }
                if($cbar && !$request->bar){
                    $gusto=categoria_user::find($cbar->id);
                    $gusto->delete();
                }
            if($request->restaurante && !$crestaurante){
                $gusto=new categoria_user;
                $gusto->categoria_id=$request->idrestaurante;
                $gusto->user_id=$id;
                $gusto->save();
            }
                if($crestaurante && !$request->restaurante){
                    $gusto=categoria_user::find($crestaurante->id);
                    $gusto->delete();
                }
            if($request->museo && !$cmuseo){
                $gusto=new categoria_user;
                $gusto->categoria_id=$request->idmuseo;
                $gusto->user_id=$id;
                $gusto->save();
            }
                if($cmuseo && !$request->museo){
                    $gusto=categoria_user::find($cmuseo->id);
                    $gusto->delete();
                }
                if ($request->modificador==1) {
                    return redirect('mapa');
                }else{
            return redirect('ver');
        }
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
