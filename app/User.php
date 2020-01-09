<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    protected $table = "users";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRole(){
        return ($this->role);
    }


    public function administrador(){
        if($this->role=="admin"){
            return true;
        }else
            return false;
        
    }

    public function userr(){
        if($this->role=="user"){
            return true;
        }else
            return false;
        
    }

    public function owner(){
        if($this->role=="owner"){
            return true;
        }else
            return false;
        
    }


    public function idvalor(){
        $val=$this->id;
        intval($val);
        return $val;
    }
}
