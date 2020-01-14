<?php

namespace App\Http\Controllers;
use App\User;
use App\Establishment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /*
    Hace update del usuario y redirige a modprofile
    */

    public function perfil(){
        $idusuario=Auth::user()->idvalor();
        $user=User::find($idusuario);      
        

        //return $user->establishment;
        return view('profile',compact('user'));
        }
        










    public function update(Request $request)
{

    $name=$request->rutaactual;
    if($request->formulario=='modprofile'){
    if($request->hasFile('file')){
        $file=$request->file('file');
        $name=time().$file->getClientOriginalName();
        $file->move(public_path().'/images/',$name);

        $db=User::find($request->id);
        $db->name=$request->name;
        $db->lastName=$request->lastname;
        $db->email=$request->email;
        $db->ruta=$name;
        $db->save();
    }
    if(!$request->hasfile('file')){
        $db=User::find($request->id);
        $db->name=$request->name;
        $db->lastName=$request->lastname;
        $db->email=$request->email;
        $db->ruta=$name;
        $db->save();
    }
        return redirect('profile');
}
    if($request->formulario=='subirfotoenprimerinicio'){
        if($request->hasFile('file')){
            $file=$request->file('file');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);

            $db=User::find($request->id);
            $db->name=$request->name;
            $db->lastName=$request->lastname;
            $db->email=$request->email;
            $db->ruta=$name;
            $db->save();
        }
        if(!$request->hasFile('file')){
            $db=User::find($request->id);
            $db->name=$request->name;
            $db->lastName=$request->lastname;
            $db->email=$request->email;
            $db->ruta=$name;
            $db->save();
        }
            return redirect('vertres');
    }
    if($request->formulario=='primerinicio'){
        $usuario=User::find($request->id);
        $usuario->primerlogin=0;
        $usuario->update();
        return redirect('mapa');
    }
}

    public function usuarioborrasupropiacuenta($id)  {   
        //Elimina el usuario de la base datos   
        User::where("id",$id)->delete();        
            return view('welcome'); 
        }   
    }
    




