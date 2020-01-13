<?php

namespace App\Http\Controllers;
use App\Owner;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function showSites(){
        $sites = Owner::all();
        return view('home')->with('sites',$sites);
    }

    public function mySites(){
        $sites = Owner::all()->where('owner','=',session('id'));

        return view('mySites')->with('sites',$sites);
    }
}
