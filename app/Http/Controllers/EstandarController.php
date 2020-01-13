<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstandarController extends Controller
{
    public function __construct(){
		$this->middleware('role:user');
	}
    public function index(){
    	return "Soy un usuario estandar";
    }
}
