<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function __construct(){
		$this->middleware('role:owner');
	}
    public function index(){
    	return "Soy un owner";
    }
}
