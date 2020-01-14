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
    public function create()
    {
        return view('gustosdelusuarioestandar/gustoscreate');
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
        if ($request->formulario=='uno') {
            if($request->fiesta){
                $gusto=new categoria_user;
                $gusto->categoria_id=$request->idfiesta;
                $gusto->user_id=$id;
                $gusto->save();
            }
            if($request->monumento){
                $gusto=new categoria_user;
                $gusto->categoria_id=$request->idmonumento;
                $gusto->user_id=$id;
                $gusto->save();
            }
            if($request->centrocomercial){
                $gusto=new categoria_user;
                $gusto->categoria_id=$request->idcentrocomercial;
                $gusto->user_id=$id;
                $gusto->save();
            }
            if($request->gimnasio){
                $gusto=new categoria_user;
                $gusto->categoria_id=$request->idgimnasio;
                $gusto->user_id=$id;
                $gusto->save();
            }
            if($request->cine){
                $gusto=new categoria_user;
                $gusto->categoria_id=$request->idcine;
                $gusto->user_id=$id;
                $gusto->save();
            }
            if($request->bar){
                $gusto=new categoria_user;
                $gusto->categoria_id=$request->idbar;
                $gusto->user_id=$id;
                $gusto->save();
            }
            if($request->restaurante){
                $gusto=new categoria_user;
                $gusto->categoria_id=$request->idrestaurante;
                $gusto->user_id=$id;
                $gusto->save();
            }
            if($request->museo){
                $gusto=new categoria_user;
                $gusto->categoria_id=$request->idmuseo;
                $gusto->user_id=$id;
                $gusto->save();
            }
            return redirect('ver');
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
