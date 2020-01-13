<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
	protected $fillable=['user_id','establishment_id','comentarios','lfavorito'];
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
