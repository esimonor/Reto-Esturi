<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function redirect(){
        return view("homeOwner");
    }
}
