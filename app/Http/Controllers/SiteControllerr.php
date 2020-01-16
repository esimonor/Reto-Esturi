<?php

namespace App\Http\Controllers;
use App\Owner;
use App\User;
use App\Establishment;
use App\establishment_user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SiteController extends Controller
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
        $null;
        $usuarioid=Auth::user()->id;
        $comprobar=DB::table('establishment_user')->where(['user_id'=>$usuarioid,'establishment_id'=>$request->id])->first();
        $b=DB::table('establishment_user')->where(['user_id'=>$usuarioid,'establishment_id'=>$request->id,'lfavorito'=>1])->first();
        $a=$request->id;
        if ($request->form=='fav') {
            if (empty($b)){
                $fav=new establishment_user;
                $fav->establishment_id=$request->id;
                $fav->user_id=$usuarioid;
                $fav->lfavorito=1;
                $fav->save();
                return 'sitio añadido a favoritos';
            }else
                $fav=establishment_user::find($b->id);
                $fav->delete();
                return 'sitio quitado de favoritos correctamente';
        }


        
        if($request->form=='com'){
            $comentario=new establishment_user;
            $comentario->establishment_id=$request->id;
            $comentario->user_id=$usuarioid;
            $comentario->comentarios=$request->comentario;
            $comentario->save();
            //aqui hay que hacer una vista que le diga al usuario gracias por dar tu opinion, por ahora pongo un comentario
            return 'gracias por cometar tu opinion se tendra encuanta';
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
    /*daba problemas nose porque y haciendolo asi no da, lo dejo comentado por si acaso*/
/*    public function showSites(){
        $sites = Owner::all();
        return view('home')->with('sites',$sites);
    }
    public function localactual($id){
        $site=Establishment::where('id','=',$id)->get();
        $idd=$id; 

            return view('lugaractual',compact('site','idd'));/*->with('site',$site);*/
            /*return view('modsite',['id'=>$id,'name'=>$name,'type'=>$name,'localization'=>$localization,'ownerId'=>$ownerId]);    
    }*/
    public function showSites(){
        $sites = Owner::all();
        return view('home')->with('sites',$sites);
    }
    public function localactual($id){
        $site=Establishment::where('id','=',$id)->get();
        $idd=$id;
            return view('lugaractual',compact('site','idd'))/*->with('site',$site)*/;
            /*return view('modsite',['id'=>$id,'name'=>$name,'type'=>$name,'localization'=>$localization,'ownerId'=>$ownerId]);*/
    }
    public function mySites(){
        $sites = Owner::all()->where('owner','=',session('id'));
        return view('mySites')->with('sites',$sites);
    }
}
 