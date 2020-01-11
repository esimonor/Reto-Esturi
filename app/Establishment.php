<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
